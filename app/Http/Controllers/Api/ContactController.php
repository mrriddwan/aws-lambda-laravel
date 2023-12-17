<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\Contact\ContactAction;
use App\Http\Requests\Contact\ContactStoreRequest;
use App\Http\Requests\Contact\ContactUpdateRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Contact\ContactResource;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $contacts = ContactAction::access()->contactIndex($request);

        return $this->success(
            Response::HTTP_ACCEPTED,
            'Successfully retrieved all contacts',
            ContactResource::collection($contacts),
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactStoreRequest $request)
    {
        $contact = ContactAction::access()->contactCreate($request);

        return $this->success(
            Response::HTTP_ACCEPTED,
            'Successfully store a contact',
            new ContactResource($contact),
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $contact_id)
    {
        $contact = ContactAction::access()->contactShow($contact_id);

        return $this->success(
            Response::HTTP_ACCEPTED,
            'Successfully retrieved selected contact',
            new ContactResource($contact),
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactUpdateRequest $request, string $contact_id)
    {
        $contact = ContactAction::access()->contactUpdate($contact_id, $request);

        return $this->success(
            Response::HTTP_ACCEPTED,
            'Successfully update selected contact',
            new ContactResource($contact),
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $contact_id)
    {
        $contact = ContactAction::access()->contactDelete($contact_id);

        return $this->success(
            Response::HTTP_ACCEPTED,
            'Successfully deleted selected contact',
            new ContactResource($contact),
        );
    }
}
