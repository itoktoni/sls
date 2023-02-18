<?php

namespace App\Dao\Entities;

trait KalibrasiEntity
{
    public static function field_primary()
    {
        return 'kalibrasi_id';
    }

    public function getFieldPrimaryAttribute()
    {
        return $this->{$this->field_primary()};
    }

    public static function field_code()
    {
        return 'kalibrasi_kode';
    }

    public function getFieldCodeAttribute()
    {
        return $this->{$this->field_code()};
    }

    public static function field_name()
    {
        return 'kalibrasi_nama';
    }

    public function getFieldNameAttribute()
    {
        return $this->{$this->field_name()};
    }

    public static function field_description()
    {
        return 'kalibrasi_deskripsi';
    }

    public function getFieldDescriptionAttribute()
    {
        return $this->{$this->field_description()};
    }

    public static function field_id_inventaris()
    {
        return 'kalibrasi_id_inventaris';
    }

    public function getFieldIdInventarisAttribute()
    {
        return $this->{$this->field_id_inventaris()};
    }

    public static function field_id_name()
    {
        return 'kalibrasi_id_name';
    }

    public function getFieldIdNameAttribute()
    {
        return $this->{$this->field_id_name()};
    }

    public static function field_id_lokasi()
    {
        return 'kalibrasi_id_lokasi';
    }

    public function getFieldIdLocationAttribute()
    {
        return $this->{$this->field_id_location()};
    }

    public static function field_is_manual()
    {
        return 'kalibrasi_is_manual';
    }

    public function getFieldIsManualAttribute()
    {
        return $this->{$this->field_is_manual()};
    }
}
