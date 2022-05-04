<?php

namespace App\Modules\Report\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $connection = REPORT_CONNECTION;

    protected $table = 'articles';

}
