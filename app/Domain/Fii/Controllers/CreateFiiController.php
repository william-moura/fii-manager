<?php

namespace App\Domain\Fii\Controllers;

use App\Domain\Fii\Interfaces\FiiServiceInterface;
use App\Domain\Fii\Requests\FiiStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateFiiController extends Controller
{
    public function __construct(private readonly FiiServiceInterface $service)
    {

    }
    
    public function __invoke(FiiStoreRequest $request)
    {        
        return $this->service->store($request->all());
    }
}