<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['company', 'role', 'package_lpa', 'min_cgpa', 'last_date'])]
class Drive extends Model
{
    //
}
