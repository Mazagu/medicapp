@props(["label", "description", "input"])
<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
	<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
	{{$label}}
	</label>
	<p class="text-xs italic">{{$description}}</p>
	<input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="{{$input}}">
</div>