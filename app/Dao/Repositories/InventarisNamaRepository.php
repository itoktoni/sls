<?php

namespace App\Dao\Repositories;

use App\Dao\Interfaces\CrudInterface;
use App\Dao\Models\InventarisNama;
use Plugins\Notes;

class InventarisNamaRepository extends MasterRepository implements CrudInterface
{
    public function __construct()
    {
        $this->model = empty($this->model) ? new InventarisNama() : $this->model;
    }
}
