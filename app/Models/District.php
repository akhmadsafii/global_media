<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = "districts";

    protected $guarded = [];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::deleting(function ($major) {
    //         $major->studyClass->each(function ($study_class) {
    //             $study_class->studentClasses->each(function ($student_class) {
    //                 $student_class->studentViolations()->delete();
    //                 $student_class->delete();
    //             });
    //             $study_class->scholarships()->delete();
    //             $study_class->careers()->delete();
    //             $study_class->delete();
    //         });
    //     });
    // }

    public function subdistricts()
    {
        return $this->hasMany(Subdistrict::class, 'id_district');
    }
}
