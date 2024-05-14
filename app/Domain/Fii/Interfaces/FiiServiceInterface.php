<?php

namespace App\Domain\Fii\Interfaces;
use App\Domain\Fii\Models\Fii;

interface FiiServiceInterface
{
    public function index();
    public function store(array $data): Fii;
}