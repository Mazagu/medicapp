@props(["label", "description", "input", "options"])
<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
	<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
	{{$label}}
	</label>
	<p class="text-xs italic">{{$description}}</p>
	<select class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="{{$input}}">
		<option>Seleccione</option>
		@foreach($options as $key => $value)
		<option value="{{$key}}">{{$value}}</option>
		@endforeach
	</select>
</div>