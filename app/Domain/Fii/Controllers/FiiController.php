<?php

namespace App\Domain\Fii\Controllers;

use App\Domain\Fii\Interfaces\FiiServiceInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FiiController extends Controller
{
    public function __construct(private readonly FiiServiceInterface $service)
    {

    }
    public function index(Request $request)
    {
        return $this->service->index();
    }

    public function store(Request $request)
    {
        return $this->service->store($request->all());
    }
}