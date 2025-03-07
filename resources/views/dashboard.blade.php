<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Computador") }}
                    </div>
                    <div class="border p-4 space-y-4">
                         <!-- Nome do Produto -->
                         <h2 class="text-lg font-bold">Nome do Computador</h2>
                        
                         <!-- Imagem do Produto -->
                         <img 
                             src="{{ asset('computador.jpg') }}" 
                             alt="Computador Modelo LG" 
                             class="w-50 h-48 object-cover rounded-lg mx-auto"
                         >
                         <img class="" src="{{ asset('1zoom.jpg') }}" alt="Descrição da imagem">
                         <!-- Descrição -->
                         <p class="text-gray-600">Descrição: Computador de última geração com processador Ryzen 9 e 32GB de RAM.</p>
                         <img 
                         src="{{ asset('computador.jpg') }}" 
                         alt="Computador Modelo LG" 
                         class="w-50 h-48 object-cover rounded-lg mx-auto"
                     >
                     <img class="" src="{{ asset('1zoom.jpg') }}" alt="Descrição da imagem">
                     <!-- Descrição -->
                     <p class="text-gray-600">Descrição: Computador de última geração com processador Ryzen 9 e 32GB de RAM.</p>
                         <!-- Preço -->
                         <h2 class="text-xl font-semibold text-green-600">Preço: R$ 5.999,90</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
