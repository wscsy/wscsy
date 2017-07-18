<?php

namespace Xcms\Settings\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $primaryKey = 'id';

    protected $fillable = [];
}
