@php
	$sustitutos = [
		1 => "Biológicos",
		2 => "Medicamentos con principios activos de estrecho margen terapéutico",
		3 => "Medicamentos de especial control médico o con medidas especiales de seguridad",
		4 => "Medicamentos para el aparato respiratorio administrados por vía inhalatoria",
		5 => "Medicamentos de estrecho margen terapéutico",
	];
@endphp
<form class="w-full">
	@CSRF
  	<div class="flex flex-wrap -mx-3 mb-6">
    	<x-text-input :label="'Nombre'" :description="'Nombre del medicamento'" :input="'nombre'"></x-text-input>
    	<x-text-input :label="'Laboratorio'" :description="'Nombre del laboratorio'" :input="'laboratorio'"></x-text-input>
    	<x-text-input :label="'CN'" :description="'Código Nacional'" :input="'cn'"></x-text-input>
    	<x-text-input :label="'ATC'" :description="'Código ATC o descripción'" :input="'atc'"></x-text-input>
    	<x-text-input :label="'Número de registro'" :description="'Número de registro'" :input="'nregistro'"></x-text-input>
    	<x-text-input :label="'CN'" :description="'Código Nacional'" :input="'cn'"></x-text-input>
    	<x-text-input :label="'VMP'" :description="'ID del código VMP'" :input="'vmp'"></x-text-input>
    	<x-text-input :label="'Principios activos'" :description="'Nº de principios activos asociados al medicamento'" :input="'npactiv'"></x-text-input>
    	<x-text-input :label="'Principio activo'" :description="'Nombre del principio activo'" :input="'practiv1'"></x-text-input>
    	<x-text-input :label="'Principio activo'" :description="'ID del principio activo'" :input="'idpractiv1'"></x-text-input>
    	<x-text-input :label="'Principio activo'" :description="'Nombre del principio activo'" :input="'practiv2'"></x-text-input>
    	<x-text-input :label="'Principio activo'" :description="'ID del principio activo'" :input="'idpractiv2'"></x-text-input>
    	<x-select-input :label="'Triángulo'" :description="'Triángulo'" :input="'triangulo'" :options="['No iene triángulo', 'Tiene triángulo']"></x-select-input>
    	<x-select-input :label="'Huérfano'" :description="'Huérfano'" :input="'huerfano'" :options="['No huérfano', 'Huérfano']"></x-select-input>
    	<x-select-input :label="'Biosimilar'" :description="'Biosimilar'" :input="'biosimilar'" :options="['No biosimilar', 'Biosimilar']"></x-select-input>
    	<x-select-input :label="'Comercializado'" :description="'Comercializado'" :input="'comerc'" :options="['No comercializado', 'Comercializado']"></x-select-input>
    	<x-select-input :label="'Sustituto'" :description="'Sustituto'" :input="'sust'" :options="$sustitutos"></x-select-input>
  	</div>
</form>
