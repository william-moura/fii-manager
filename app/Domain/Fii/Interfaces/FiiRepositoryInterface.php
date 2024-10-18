<?php

namespace App\Domain\Fii\Interfaces;
use App\Domain\Fii\Models\Fii;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface FiiRepositoryInterface
{
    public function getAll(): Collection;

    public function store(array $data): Model;
}