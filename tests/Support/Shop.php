<?php namespace Tests\Routing\Support;

class Shop
{
	public function index()
	{
		return __METHOD__;
	}

	public function listProducts()
	{
		return __METHOD__;
	}

	public function showProduct(int $id, string $slug, string $lang)
	{
		return [$id, $slug, $lang];
	}
}
