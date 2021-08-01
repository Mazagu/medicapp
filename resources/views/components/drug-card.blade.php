@props(['drug'])
<div class="max-w-md rounded overflow-hidden shadow-lg m-3 bg-blue-300 relative pb-16">
  @if(!empty($drug['fotos']))
    <div class="flex">
      @foreach($drug['fotos'] as $foto)
      <img class="w-full" src="{{$foto['url']}}" alt="{{$drug['nombre']}}">
      @endforeach
    </div>
  @endif
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">{{$drug['nombre']}}</div>
    <p class="text-gray-700 text-base"></p>
    <ul>
      <li>
        <div class="font-bold text-blue-900">Laboratorio</div>
        <div>{{$drug['labtitular']}}</div>
      </li>
      <li>
        <div class="font-bold text-blue-900">Condiciones de prescripción</div>
        <div>{{isset($drug['cpresc'])?$drug['cpresc']:""}}</div>
      </li>
      <li>
        <div class="font-bold text-blue-900">Vías adminisliación</div>
        <div>
          @foreach($drug['viasAdministracion'] as $via)
            <div>{{$via['nombre']}}</div>
          @endforeach
        </div>
      </li>
      <li>
        <div class="font-bold text-blue-900">Forma Farmacéutica</div>
        <div>{{$drug['formaFarmaceutica']['nombre']}}</div>
      </li>
      <li>
        <div class="font-bold text-blue-900">vtm</div>
        <div>{{$drug['vtm']['id'] . " - " . $drug['vtm']['nombre']}}</div>
      </li>
      <li>
        <div class="font-bold text-blue-900">Dosis</div>
        <div>{{$drug['dosis']}}</div>
      </li>
    </ul>
  </div>
  <div class="w-full px-6 pt-4 pb-2 absolute bottom-0 text-right">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Recetar
    </button>
  </div>
</div>