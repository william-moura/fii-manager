<?php

namespace Tests\Unit;
use App\Domain\Fii\Interfaces\FiiRepositoryInterface;
use App\Domain\Fii\Models\Fii;
use App\Domain\Fii\Services\FiiService;
use Mockery;
use Tests\TestCase;

class FiiServiceTest extends TestCase
{
    protected $repository;    
    protected $service;
    public function setUp(): void
    {
        parent::setUp();
        $this->initializeMocks();
    }

    private function initializeMocks()
    {
        $this->repository = Mockery::mock(FiiRepositoryInterface::class);                
    }

    public function testStore()
    {
        $params = ['fii_code' => 'test', 'fii_price' => 124.45];
        $this->repository->shouldReceive('store')->with($params)->once()->andReturn((new Fii()));
        $result = $this->repository->store($params);
        $this->assertInstanceOf(Fii::class, $result);
    }
    public function testListFii()
    {
        $this->repository->shouldReceive('getAll')->with([])->once()->andReturn([]);
        $result = $this->repository->getAll([]);
        $this->assertEquals([], $result);
    }
}