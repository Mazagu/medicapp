<div id="drug-modal" class="bg-blue-100 bg-opacity-50 bottom-0 fixed left-0 p-5 right-0 top-0">
	<div class="text-blue-800 text-right">
		<button onclick='document.querySelector("#drug-modal").remove()'>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
</svg>
		</button>
	</div>
	<div class="bg-white overflow-auto p-5 rounded-md" style="height: 90%;">		
		<div data-nregistro="{{$nregistro}}" class="text-blue-700 font-bold">{{$nombre}}</div>
		<div class="text-gray-400 text-xs">
			<div data-id="{{$formaFarmaceutica['id']}}">{{$formaFarmaceutica['nombre']}}</div>	
			<div dat-id="{{$formaFarmaceuticaSimplificada['id']}}">{{$formaFarmaceuticaSimplificada['nombre']}}</div>	
			<div data-id="{{$vtm['id']}}">{{$vtm['nombre']}}({{$dosis}})</div>	
		</div>
		<div>
			<span class="italic text-sm text-blue-400">({{$pactivos}})</span>
			<span class="font-bold"> {{$cpresc}}</span>
		</div>
		<div class="font-bold">{{$labtitular}}</div>
	@if(!empty($estado))
		<div>
		@foreach($estado as $key => $val)
			@switch($key)
				@case('aut')
					<span class="bg-green-400 text-gray-100 text-xs px-2 py-1 rounded">
						Autorizado ({{Carbon\Carbon::createFromTimestamp($val)->format("d/m/Y")}})
					</span>
				@break
				@case('susp')
					<span class="bg-yellow-400 text-gray-800 text-xs px-2 py-1 rounded">
						Suspendido ({{Carbon\Carbon::createFromTimestamp($val)->format("d/m/Y")}})
					</span>
				@break
				@case('rev')
					<span class="bg-red-500 text-gray-200 text-xs px-2 py-1 rounded">
						Revocado ({{Carbon\Carbon::createFromTimestamp($val)->format("d/m/Y")}})
					</span>
				@break
				@default
					<span class="bg-gray-600 text-gray-100 text-xs px-2 py-1 rounded">
						Desconocido
					</span>
			@endswitch
		@endforeach
		</div>	
	@endif
	<ul class="flex m-2">
		@if($comerc)
		<li title="Comercializado">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 15.536c-1.171 1.952-3.07 1.952-4.242 0-1.172-1.953-1.172-5.119 0-7.072 1.171-1.952 3.07-1.952 4.242 0M8 10.5h4m-4 3h4m9-1.5a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
		</li>
		@endif
		@if($receta)
		<li title="Requiere receta médica">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
</svg>
		</li>
		@endif
		@if($generico)
		<li title="Genérico">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z" clip-rule="evenodd" />
</svg>
		</li>
		@endif
		@if($conduc)
		<li title="Afecta a la conducción">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
</svg>
		</li>
		@endif
		@if($triangulo)
		<li title="Seguimiento adicional de su seguridad">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M 0,20 10,5 20,20 z" clip-rule="evenodd"/>
</svg>
		</li>
		@endif
		@if($huerfano)
		<li title="Medicamento huérfano">H</li>
		@endif
		@if($biosimilar)
		<li title="Medicamento huérfano">BIO</li>
		@endif
		@if($psum)
		<li title="Problemas suministro" class="text-red-800">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
  <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
</svg>
		</li>
		@endif
		@if($notas)
		<li title="Notas" class="text-red-800">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
</svg>
		</li>
		@endif
		@if($ema)
		<li title="Registrado
por procedimiento centralizado">EMA</li>
		@endif
	</ul>
	@if(!empty($presentaciones))
		<div class="font-bold">Presentación:</div>
		@foreach($presentaciones as $presentacion)
		<div data-cn="{{$presentacion['cn']}}" class="text-sm border-2 p-1 m-1">
			{{$presentacion['nombre']}}
			@if($presentacion['psum'])
			<span title="Problemas suministro" class="text-red-800">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
	  <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
	  <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
	</svg>
			</span>
			@endif
			@if($presentacion['comerc'] && isset($presentacion['estado']['aut']))
			<button @click="cima.prescribe('{{$presentacion['cn']}}')" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 rounded">
		      Recetar
		    </button>
			@endif
		</div>
		@endforeach
	@endif
	@if(!empty($nosustituible))
		<div>Sustituible: <span data-id="{{$nosustituible['id']}}">{{$nosustituible['nombre']}}<span></div>
	@endif	
	@if(!empty($fotos))
	<div class="flex">
		@foreach($fotos as $foto)
		<div></div>	
		<div>
			<img src="{{$foto['url']}}" alt="{{$foto['tipo']}}">
		</div>
		@endforeach
	</div>
	@endif
	@if(!empty($docs))
	<div class="text-sm border-2 p-1 m-1">
		<div class="font-bold">Documentos:</div>
		@foreach($docs as $doc)
		<div>
			<a href="{{$doc['url']}}" target="_NEW">{{$doc['url']}}</a>
		</div>
		@if(isset($doc['urlHtml']))	
			<div>
				<a href="{{$doc['urlHtml']}}" target="_NEW">{{$doc['urlHtml']}}</a>
			</div>	
		@endif	
		@if(isset($doc['fecha']))
		<div>{{Carbon\Carbon::createFromTimestamp($doc['fecha'])->format("d/m/Y")}}</div>	
		@endif
		@endforeach
	</div>
	@endif
	@if(!empty($atcs))
	<div class="text-sm border-2 p-1 m-1">
		<div class="font-bold">Códigos ATC:</div>
		@foreach($atcs as $atc)
		<div data-nivel="{{$atc['nivel']}}">{{$atc['codigo']}} - {{$atc['nombre']}}</div>		
		@endforeach
	</div>
	@endif	
	@if(!empty($principiosActivos))
	<div class="text-sm border-2 p-1 m-1">
		<div class="font-bold">Principios activos:</div>
		@foreach($principiosActivos as $principiosActivo)
		<div data-order="{{$principiosActivo['orden']}}" data-id="{{$principiosActivo['id']}}">
			{{$principiosActivo['codigo']}} - {{$principiosActivo['nombre']}} {{$principiosActivo['cantidad']}}{{$principiosActivo['unidad']}}
		</div>		
		@endforeach
	</div>	
	@endif	
	@if(!empty($excipientes))
	<div class="text-sm border-2 p-1 m-1">
		<div class="font-bold">Excipientes:</div>
		@foreach($excipientes as $excipiente)
		<div data-order="{{$principiosActivo['orden']}}" data-id="{{$principiosActivo['id']}}">
			{{$excipiente['nombre']}} {{$excipiente['cantidad']}}{{$excipiente['unidad']}}
		</div>
		@endforeach
	</div>
	@endif
	@if(!empty($viasAdministracion))
	<div class="text-sm border-2 p-1 m-1">
		<div class="font-bold">Vía administración:</div>
		@foreach($viasAdministracion as $viaAdministracion)
		<div data-id="{{$viaAdministracion['id']}}">{{$viaAdministracion['nombre']}}</div>	
		@endforeach
	</div>
	@endif
	</div>	
</div>