<?php

namespace App\Repositories\Contact;

use App\Models\Contact;
use Illuminate\Pagination\LengthAwarePaginator;

interface ContactRepoInterface
{
    public function index(): LengthAwarePaginator;
    public function show(string $contact_id): Contact;
    public function store(array $data): Contact;
    public function update(Contact $contact, array $data): Contact;
    public function delete(Contact $contact): void;
}