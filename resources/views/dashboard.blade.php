<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                </div>
            </div>
            <div class="p-6 text-gray-900">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        <img src="gabnet.jpg" alt="Produto 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2">Gabinete  Transparente</h3>
                            <p class="text-gray-600 text-sm mb-4 text-justify">Este gabinete transparente é a escolha perfeita! Com 6 coolers RGB para máximo resfriamento e um design incrível em vidro temperado, ele transforma seu setup em um verdadeiro espetáculo!</p>
                            <span class="text-green-600 font-bold text-lg">R$ 5,000</span>
                            <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded flex items-center justify-center transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Adicionar ao Carrinho
                            </button>
                        </div>
                    </div>
            
                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        <img src="gabneti.jpg" alt="Produto 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2">Gabinete Gamer Aigo DarkFlash Knight-K1</h3>
                            <p class="text-gray-600 text-sm mb-4 text-justify">Com design sofisticado, vidro temperado e excelente fluxo de ar, ele oferece espaço para placas de vídeo grandes e resfriamento otimizado com suporte para múltiplos coolers e watercooler.</p>
                            <span class="text-green-600 font-bold text-lg">R$ 1.800</span>
                            <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded flex items-center justify-center transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Adicionar ao Carrinho
                            </button>
                        </div>
                    </div>
            
                    <!-- Card 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        <img src="1zoom.jpg" alt="Produto 3" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2">Computador All-in-One LG</h3>
                            <p class="text-gray-600 text-sm mb-4 text-justify">Computador All-in-One LG com tela de 24", sistema operacional Windows 10 Home (com recomendação da LG para Windows 11 Pro em ambientes corporativos), processador Intel® Core™ i3 de 7ª geração, memória RAM de 4GB, armazenamento interno de 1TB e peso de 4,80 kg.</p>
                            <span class="text-green-600 font-bold text-lg">R$ 2.580</span>
                            <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded flex items-center justify-center transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Adicionar ao Carrinho
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
