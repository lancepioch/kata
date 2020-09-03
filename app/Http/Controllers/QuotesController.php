<?php

namespace App\Http\Controllers;

use App\Quotes;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function daily(Request $request)
    {
        $date = \Carbon\Carbon::create($request->d) ?? now();

        return (new Quotes())->quotd($date);
    }

    public function random(Request $request)
    {
        return (new Quotes())->random();
    }

    public function search(Request $request)
    {
        $search = $request->q;

        abort_unless(strlen($search) > 0, 400, 'You must provide some input to the search!');

        return (new Quotes())->search($search);
    }
}
