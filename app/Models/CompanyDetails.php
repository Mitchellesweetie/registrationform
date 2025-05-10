<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    use HasFactory;
    protected $fillable=['companyname','industry','designation','website','personal_details_id'];

    public function personaldetails()
    {
        return $this->belongsTo(PersonalDetails::class,'personal_details_id');
    }
}
