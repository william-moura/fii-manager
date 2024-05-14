<?php

namespace App\Domain\Fii\Repositories;

use App\Domain\Fii\Interfaces\FiiRepositoryInterface;
use App\Domain\Fii\Models\Fii;

class FiiRepository implements FiiRepositoryInterface
{
    public function __construct(private Fii $model)
    {

    }

    public function getAll(): array
    {
        return $this->model->all()->toArray();
    }

    public function store(array $data): Fii
    {
        return $this->model->create($data);
    }
}