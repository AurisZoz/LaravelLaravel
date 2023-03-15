<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Automobiliai extends Model
{
    use HasFactory;
    
    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function grades(){
        return $this->hasMany(Grade::class);
    }

    public function scopeFilter(Builder $query, $filter )
    {
        if ($filter->vardas!=null){
            $query->where('id','like', "$filter->id%");
            $query->where('vardas','like', "$filter->vardas%");
            $query->where('pavarde','like', "$filter->pavarde%");
            $query->where('marke1','like', "$filter->marke1%");
            $query->where('modelis1','like', "$filter->modelis1%");
            $query->where('numeris1','like', "$filter->numeris1%");
            $query->where('marke2','like', "$filter->marke2%");
            $query->where('modelis2','like', "$filter->modelis2%");
            $query->where('numeris2','like', "$filter->numeris2%");
            $query->where('marke3','like', "$filter->marke3%");
            $query->where('modelis3','like', "$filter->modelis3%");
            $query->where('numeris3','like', "$filter->numeris3%");
        }
    }

}
