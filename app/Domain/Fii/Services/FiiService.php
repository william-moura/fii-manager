<?php

namespace App\Domain\Fii\Services;
use App\Domain\Fii\Interfaces\FiiRepositoryInterface;
use App\Domain\Fii\Interfaces\FiiServiceInterface;
use App\Domain\Fii\Models\Fii;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class FiiService implements FiiServiceInterface
{
    public function __construct(private readonly FiiRepositoryInterface $repository)
    {

    }
    public function index(): Collection
    {
        return $this->repository->getAll();
    }

    public function store(array $data): Model
    {
        return $this->repository->store($data);
    }
}