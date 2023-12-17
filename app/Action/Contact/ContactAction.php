<?php

namespace App\Actions\Contact;

use App\Models\Contact;
use App\Repositories\Contact\ContactRepoInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ContactAction
{
    protected ContactRepoInterface $contactRepo;

    public function __construct()
    {
        $this->contactRepo = app(ContactRepoInterface::class);
    }

    //******************************************************************************************************************
    // Calling Functions
    //******************************************************************************************************************

    public static function access(): self
    {
        return new self();
    }

    /**
     * Get contact index
     *
     * @return LengthAwarePaginator
     */
    public function contactIndex(): LengthAwarePaginator
    {
        $contacts = $this->contactRepo->index();

        return $contacts;
    }

    /**
     * Show contact
     *
     * @param string $contact_id
     * @return Contact
     */
    public function contactShow(string $contact_id): Contact
    {
        $contact = $this->contactRepo->show($contact_id);

        return $contact;
    }

    /**
     * Store contact
     *
     * @param Request $request
     * @return Contact
     */
    public function contactCreate(Request $request): Contact
    {
        $contact = $this->contactRepo->store($request->all());

        return $contact;
    }

    /**
     * Update contact
     *
     * @param string $contact_id
     * @return Contact
     */
    public function contactUpdate(string $contact_id, Request $request): Contact
    {
        $contact = $this->contactRepo->show($contact_id);

        $contact = $this->contactRepo->update($contact, $request->all());

        return $contact;
    }

    /**
     * Delete contact
     *
     * @param string $contact_id
     * @return Contact
     */
    public function contactDelete(string $contact_id): Contact
    {
        $contact = $this->contactRepo->show($contact_id);

        $this->contactRepo->delete($contact);

        return $contact;
    }
}
