<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = "provinces";

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

    public function districts()
    {
        return $this->hasMany(District::class, 'id_province');
    }
}
