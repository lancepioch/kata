<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use \Sushi\Sushi;

    public function getRows()
    {
        return config('quotes');
    }
}
