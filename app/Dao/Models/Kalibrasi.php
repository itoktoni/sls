<?php

namespace App\Dao\Models;

use App\Dao\Builder\DataBuilder;
use App\Dao\Entities\KalibrasiEntity;
use App\Dao\Traits\ActiveTrait;
use App\Dao\Traits\ApiTrait;
use App\Dao\Traits\DataTableTrait;
use App\Dao\Traits\OptionTrait;
use App\Http\Resources\KalibrasiResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kirschbaum\PowerJoins\PowerJoins;
use Kyslik\ColumnSortable\Sortable;
use Mehradsadeghi\FilterQueryString\FilterQueryString as FilterQueryString;
use Plugins\Query;
use Touhidurabir\ModelSanitize\Sanitizable as Sanitizable;
use Wildside\Userstamps\Userstamps;

class Kalibrasi extends Model
{
    use Sortable, FilterQueryString, Sanitizable, DataTableTrait, KalibrasiEntity, ActiveTrait, OptionTrait, PowerJoins, ApiTrait, SoftDeletes, Userstamps;

    protected $table = 'kalibrasi';
    protected $primaryKey = 'kalibrasi_id';

    protected $fillable = [
        'kalibrasi_nama',
        'kalibrasi_kode',
        'kalibrasi_id_instansi',
        'kalibrasi_id_location',
        'kalibrasi_id_nama',
        'kalibrasi_id_inventaris',
        'kalibrasi_tanggal_kalibrasi',
        'kalibrasi_tanggal_diterbitkan',
        'kalibrasi_id_teknisi',
        'kalibrasi_no_sertifikat',
        'kalibrasi_skor',
        'kalibrasi_hasil',
        'kalibrasi_is_manual',
    ];

    public $sortable = [
        'kalibrasi_nama',
    ];

    protected $casts = [
        'kalibrasi_kode' => 'string',
    ];

    protected $filters = [
        'filter',
    ];

    public $timestamps = false;
    public $incrementing = true;

    public function fieldSearching()
    {
        return $this->field_name();
    }

    public function fieldDatatable(): array
    {
        return [
            DataBuilder::build($this->field_primary())->name('ID')->show(false)->sort(),
            DataBuilder::build($this->field_code())->name('Code')->show()->sort(),
            DataBuilder::build($this->field_name())->name('Name')->show()->sort(),
        ];
    }

    public function apiTransform()
    {
        return KalibrasiResource::class;
    }

    public static function boot()
    {
        parent::creating(function ($model) {
            $model->{$model->field_code()} = Query::autoNumber($model->getTable(), $model->field_code(), 'LABKAL', 20);
        });

        parent::saving(function ($model) {
            $code_inventaris = request()->get($model->field_id_inventaris());
            if ($code_inventaris) {
                $inventaris = Inventaris::with([
                    'has_name',
                    'has_location',
                    'has_type',
                    'has_brand',
                    'has_instansi',
                ])->where(Inventaris::field_code(), $code_inventaris)->first();
                $model->{$model->field_is_manual()} = 0;
                $model->{$model->field_id_name()} = $inventaris->has_name->field_code ?? null;
                $model->{$model->field_id_name()} = $inventaris->has_name->field_code ?? null;
            } else {
                $model->{$model->field_is_manual()} = 1;
            }
        });

        parent::boot();
    }
}
