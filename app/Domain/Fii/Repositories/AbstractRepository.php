<?php
declare(strict_types=1);

namespace App\Domain\Fii\Repositories;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository
{

    public function __construct(protected Model $model)
    {
        
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function store(array $data): Model
    {
        return $this->model->create($data);
    }
}