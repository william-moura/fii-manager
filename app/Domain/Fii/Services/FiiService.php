<?php

namespace App\Domain\Fii\Services;
use App\Domain\Fii\Interfaces\FiiRepositoryInterface;
use App\Domain\Fii\Interfaces\FiiServiceInterface;
use App\Domain\Fii\Models\Fii;

class FiiService implements FiiServiceInterface
{
    public function __construct(private readonly FiiRepositoryInterface $repository)
    {

    }
    public function index()
    {
        return $this->repository->getAll();
    }

    public function store(array $data): Fii
    {
        return $this->repository->store($data);
    }
}