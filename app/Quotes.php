<?php

namespace App;

use App\Models\Quote;
use Carbon\Carbon;

class Quotes
{
    protected $quotes = [];

    public function __construct(array $quotes = [])
    {
        if (empty($quotes)) {
            $this->setQuotes(config('quotes'));
            return;
        }

        $this->setQuotes($quotes);
    }

    public function getQuotes()
    {
        return $this->quotes;
    }

    public function setQuotes(array $quotes)
    {
        $this->quotes = $quotes;
    }

    public function quotd(Carbon $date = null)
    {
        $date = $date ?? now();
        $day = $date->format('Ymd');

        return $this->quotes[$day % count($this->quotes)];
    }

    public function random()
    {
        return collect($this->quotes)->random();
    }

    public function search(string $search)
    {
        return collect($this->quotes)
            ->filter(function ($quote, $key) use ($search) {
                return strpos($quote['text'], $search) !== false;
            })->values();
    }
}
