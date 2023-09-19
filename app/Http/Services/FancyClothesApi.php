<?php

namespace App\Http\Services;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class FancyClothesApi
{
    public function getListProducts(): PromiseInterface | Response
    {
        return $this->getRequest('products');
    }

    public function getSingleProduct(int $id): PromiseInterface | Response
    {
        return $this->getRequest("products/$id");
    }

    private function getRequest(string $endpoint): PromiseInterface | Response
    {
        return $this->buildRequest()->get($endpoint);
    }

    private function buildRequest(): PendingRequest
    {
        $request = Http::baseUrl(config('shop-api.baseUrl'))
            ->withToken(config('shop-api.token'))
            ->asJson()
            ->acceptJson();

        if (app()->environment('local')) {
            $request->withOptions(['verify' => false]);
        }

        return $request;
    }
}
