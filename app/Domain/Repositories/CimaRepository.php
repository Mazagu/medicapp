<?php 

namespace App\Domain\Repositories;

use Illuminate\Support\Facades\Http;

class CimaRepository implements RepositoryInterface
{
	public function all($pagina = 1) 
	{
		$response = Http::get('https://cima.aemps.es/cima/rest/medicamentos?pagina='.$pagina);

		return $response->json();
	}

	public function create(Array $patient) 
	{
		//
	}
	public function update(Array $patient) 
	{
		//
	}
	public function delete(int $id) 
	{
		//
	}
	public function filter(Array $filters) 
	{
		$response = Http::get('https://cima.aemps.es/cima/rest/medicamentos?'.http_build_query($filters));
		return $response->json();
	}
	public function show(int $id) 
	{
		$response = Http::get('https://cima.aemps.es/cima/rest/medicamento?nregistro='.$id);
		return $response->json();
	}
}