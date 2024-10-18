<?php

namespace App\Domain\Fii\Repositories;

use App\Domain\Fii\Interfaces\FiiRepositoryInterface;
use App\Domain\Fii\Models\Fii;

class FiiRepository extends AbstractRepository implements FiiRepositoryInterface
{
    public function __construct(Fii $model)
    {
        parent::__construct($model);
    }
}