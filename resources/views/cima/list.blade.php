<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CIMA') }}
        </h2>
        Receta de medicamentos listados por la AEMPS
    </x-slot>
    <div id="loader" class="bg-black bg-opacity-30 bottom-0 fixed left-0 right-0 top-0" style="z-index:10000">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
            <img class="animate-spin h-5 w-5 mr-3" src="img/pill.svg" viewBox="0 0 24 24">
        </div>
    </div>
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
                		@php
                			$link_prev = $_GET;
                			$link_prev['pagina'] = $pagina;
                			$link_prev['pagina'] -= 1;
                		@endphp
                	<a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('cima.list', $link_prev)}}">Anterior</a>
                	@endif
                	@if($totalFilas / $tamanioPagina > $pagina)
                		@php
                			$link_next = $_GET;
                			$link_next['pagina'] = $pagina;
                			$link_next['pagina'] += 1;
                		@endphp
                	<a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('cima.list', $link_next)}}">Siguiente</a>
                	@endif
                </div>
            </div>
        </div>
    </div>
    <div id="drug-modal-container"></div>
    <script type="text/javascript">
        var cima;
        window.onload = () => {
            cima = new cima();
            document.querySelector("#loader").classList.add("hidden");
        };
    </script>
</x-app-layout>
