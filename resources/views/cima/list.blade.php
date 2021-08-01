<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CIMA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        	<x-drug-search></x-drug-search>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-wrap justify-evenly">
                    @if($resultados)
                    	@foreach($resultados as $drug)
                		<x-drug-card :drug="$drug"></x-drug-card>	
                    	@endforeach
                    @endif
                </div>
                <div class="p-6 bg-white border-b border-gray-200 text-right">
                	@if($pagina > 1)
                	<a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('cima.list', ['page' => --$pagina])}}">Anterior</a>
                	@endif
                	@if($totalFilas / $tamanioPagina > $pagina)
                	<a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('cima.list', ['page' => ++$pagina])}}">Siguiente</a>
                	@endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
