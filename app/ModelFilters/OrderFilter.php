<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;
use Illuminate\Support\Carbon;

class OrderFilter extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relationMethod => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    public function search($search)
    {
        return $this->whereHas('purchaser', function ($q) use ($search) {
            $q->whereHas('distributor', function ($p) use ($search) {
                $p->where('first_name', 'LIKE', "%{$search}%")
                ->orWhere('last_name', 'LIKE', "%{$search}%")
                ->orWhere('id', 'LIKE', "%{$search}%");

            });
        });
    }

    public function startDate($start_date)
    {
        $start_date = $start_date !== null ? Carbon::parse($start_date)->startOfDay() : now()->startOfDay();
        if (request()->end_date) {
            $end_date = Carbon::parse(request()->end_date)->endOfDay();

            return $this->whereBetween('order_date', [$start_date, $end_date]);
        }

        return $this->whereDate('order_date', $start_date);
    }
}
