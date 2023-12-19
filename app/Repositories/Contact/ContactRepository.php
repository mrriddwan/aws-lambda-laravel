<?php

namespace App\Repositories\Contact;

use App\Models\Contact;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Contact\ContactRepoInterface;

class ContactRepository implements ContactRepoInterface
{
    public function index(?string $orderBy, ?string $orderDirection = 'asc', ?int $latestPerPage  = 20, ?string $search = ""): LengthAwarePaginator
    {

        
        return Contact::orderByWithDirection($orderBy, $orderDirection)
            ->latestByID($latestPerPage)
            ->searchGenderEmail($search)
            ->paginate($latestPerPage);
    }
    public function show(string $contact_id): Contact
    {
        return Contact::find($contact_id);
    }
    public function store(array $data): Contact
    {
        return Contact::create([
            'name'         => $data['name'],
            'gender'       => $data['gender'],
            'phone_number' => $data['phone_number'],
            'email'        => $data['email'],
        ]);
    }
    public function update(Contact $contact, array $data): Contact
    {
        $contact->update([
            'name'         => $data['name']         ?? $contact->name,
            'gender'       => $data['gender']       ?? $contact->gender,
            'phone_number' => $data['phone_number'] ?? $contact->phone_number,
            'email'        => $data['email']        ?? $contact->email,
        ]);

        return $contact;
    }
    public function delete(Contact $contact): void
    {
        $contact->delete();
    }
}
