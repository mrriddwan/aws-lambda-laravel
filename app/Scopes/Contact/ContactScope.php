<?php

namespace App\Scopes\Contact;

trait ContactScope
{
    public function scopeOrderByWithDirection($query, ?string $orderBy, ?string $orderDirection)
    {
        return $query
            ->when(($orderBy && isset($orderBy)), function ($q) use ($orderBy, $orderDirection)
            {
                $q->orderBy($orderBy, $orderDirection ?? 'asc');
            });
    }

    public function scopeLatestByID($query, ?int $latest)
    {
        return $query
            ->when(($latest && isset($latest)), function ($q)
            {
                $q->latest('id');
            });
    }

    public function scopeSearchGenderEmail($query, ?string $search)
    {
        return $query
            ->when(($search && isset($search)), function ($q) use ($search)
            {
                $q->where('email', 'like', '%' . $search . '%')
                    ->orWhere('gender', $search);
            });
    }
}
