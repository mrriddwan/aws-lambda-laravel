<?php

namespace App\Scopes\Contact;

trait ContactScope
{
    public function scopeOrderByWithDirection($query, string $orderBy, string $orderDirection)
    {
        return $query
            ->when($orderBy, function ($q) use ($orderBy, $orderDirection)
            {
                $q->orderBy($orderBy, $orderDirection);
            });
    }

    public function scopeLatestByID($query, int $latest)
    {
        return $query
            ->when($latest, function ($q)
            {
                $q->latest('id');
            });
    }

    public function scopeSearchGenderEmail($query, string $search)
    {
        return $query
            ->when($search, function ($q) use ($search)
            {
                $q->where('email', 'like', '%' . $search . '%')
                    ->orWhere('gender', $search);
            });
    }
}
