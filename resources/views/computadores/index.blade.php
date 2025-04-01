<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            🖥️ Lista de Computadores
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-dourado-claro border-b border-gray-200">
                    
                    <!-- Botão "Novo Computador" -->
                    <div class="mb-4">
                        <a href="{{ route('computadores.create') }}" class="btn btn-success">
                            <i class="fas fa-plus-circle mr-2"></i> Novo Computador
                        </a>
                    </div>

                    <!-- Tabela -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Marca/Modelo</th>
                                    <th>Especificações</th>
                                    <th>SO</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($computadores as $computador)
                                    <tr>
                                        <td>{{ $computador->id }}</td>
                                        <td>{{ $computador->nome }}</td>
                                        <td>
                                            <div class="fw-bold">{{ $computador->marca }}</div>
                                            {{ $computador->modelo }}
                                        </td>
                                        <td>
                                            <div><span class="badge bg-info">RAM: {{ $computador->ram_gb }}GB</span></div>
                                            <div>{{ $computador->armazenamento_capacidade }}GB {{ $computador->armazenamento_tipo }}</div>
                                            <small class="text-muted">{{ $computador->processador }}</small>
                                        </td>
                                        <td>
                                            {{ $computador->sistema_operacional }}
                                            <div class="text-muted small">{{ $computador->arquitetura_so }}</div>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill bg-{{ $computador->status === 'Ativo' ? 'success' : ($computador->status === 'Manutenção' ? 'warning' : 'secondary') }}">
                                                {{ $computador->status }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <!-- Botão Adicionar ao Carrinho -->
                                                <form action="{{ route('carrinho.adicionar', $computador->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm" title="Adicionar ao Carrinho">
                                                        <i class="fas fa-cart-plus"></i>
                                                    </button>
                                                </form>

                                                <!-- Botão Editar -->
                                                <a href="{{ route('computadores.edit', $computador->id) }}" 
                                                   class="btn btn-sm btn-primary"
                                                   title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                
                                                <!-- Botão Excluir -->
                                                <form action="{{ route('computadores.destroy', $computador->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Tem certeza que deseja excluir?')"
                                                            title="Excluir">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">Nenhum computador cadastrado 😢</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Paginação -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $computadores->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>