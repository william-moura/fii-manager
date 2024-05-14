<?php

namespace App\Domain\Fii\Interfaces;
use App\Domain\Fii\Models\Fii;

interface FiiRepositoryInterface
{
    public function getAll(): array;

    public function store(array $data): Fii;
}