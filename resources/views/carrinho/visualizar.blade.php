<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            🛒 Seu Carrinho de Compras
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-dourado-claro">
                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(count($carrinho) > 0)
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Preço Unitário</th>
                                        <th>Quantidade</th>
                                        <th>Subtotal</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($carrinho as $item)
                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    @if($item['imagem'])
                                                        <img src="{{ asset('storage/' . $item['imagem']) }}" 
                                                             class="img-thumbnail me-3" 
                                                             style="width: 80px; height: 80px; object-fit: cover">
                                                    @endif
                                                    {{ $item['nome'] }}
                                                </div>
                                            </td>
                                            <td class="align-middle">R$ {{ number_format($item['preco'], 2, ',', '.') }}</td>
                                            <td class="align-middle">{{ $item['quantidade'] }}</td>
                                            <td class="align-middle">R$ {{ number_format($item['preco'] * $item['quantidade'], 2, ',', '.') }}</td>
                                            <td class="align-middle">
                                                <form action="{{ route('carrinho.remover', $item['id']) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="text-end fw-bold">Total:</td>
                                        <td class="fw-bold">R$ {{ number_format(array_sum(array_map(function($item) { 
                                            return $item['preco'] * $item['quantidade']; 
                                        }, $carrinho)), 2, ',', '.') }}</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info">
                            Seu carrinho está vazio!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>