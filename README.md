Contact API Documentation
This API provides CRUD operations for managing contact information. The API is built using Laravel and is hosted on AWS Lambda with a MySQL database.

Base URL
The base URL for the API is https://d4m9d0datk.execute-api.ap-southeast-1.amazonaws.com/.

Authentication
No authentication is required for this API.

Endpoints

1. Get All Contacts
   Request
   Method: GET
   Endpoint: /contacts/index
   Description: Get a list of all contacts alphabetically.

    https://rfpcari.postman.co/workspace/Experimental~c673a9d6-89e8-4b23-882c-b7ede8eb41e1/request/19202170-60708645-7ac8-422a-83bb-5e028f5537db?active-environment=3cf45d96-f621-4d29-8e64-22b1e2e24e96

Query Params:
1 - Order By
-- accepts 'name','gender','phone_number','email' for order by of list

2 - Order Direction
-- default: 'asc', choices 'asc' or 'desc' for ascending or descending

3 - latest
-- accepts integer for number of resource page. If provided, list will sort to latest by ID

4 - search
-- search Contact for email or gender

Response

`{
"status": "success",
"message": "Successfully retrieved all contacts",
"meta": {
"timestamp": "2023-12-20 01:20:22"
},
"current_page": 1,
"data": [
{
"id": 1,
"name": "Violet Swift",
"gender": "Female",
"phone_number": "+13035413405",
"email": "amina01@yahoo.com",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
},
{
"id": 2,
"name": "Cameron Gleichner",
"gender": "Female",
"phone_number": "+1.806.512.3438",
"email": "aufderhar.amber@hotmail.com",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
},
{
"id": 3,
"name": "Reyes Rolfson DVM",
"gender": "Male",
"phone_number": "559.427.7615",
"email": "lang.nikki@hotmail.com",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
},
{
"id": 4,
"name": "Dr. Naomi Bashirian IV",
"gender": "Female",
"phone_number": "+1 (220) 541-9699",
"email": "denesik.lilliana@roberts.biz",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
},
{
"id": 5,
"name": "Ms. Flo Kris PhD",
"gender": "Male",
"phone_number": "+1.520.827.2481",
"email": "cormier.kobe@hamill.com",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
},
{
"id": 6,
"name": "Dr. Hazel O'Reilly Jr.",
"gender": "Male",
"phone_number": "1-435-545-7758",
"email": "kenneth.olson@hotmail.com",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
},
{
"id": 7,
"name": "Rowan Hauck",
"gender": "Female",
"phone_number": "+1-425-247-7353",
"email": "kobe.wiza@yahoo.com",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
},
{
"id": 8,
"name": "Viviane Brakus",
"gender": "Male",
"phone_number": "1-947-381-6955",
"email": "keebler.felicita@hotmail.com",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
},
{
"id": 9,
"name": "Dr. Arvilla Emard V",
"gender": "Male",
"phone_number": "1-754-736-4032",
"email": "cturner@gmail.com",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
},
{
"id": 10,
"name": "Damien Shanahan",
"gender": "Male",
"phone_number": "814-233-3108",
"email": "blanda.mayra@weimann.info",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
}
],
"first_page_url": "http://aws-lambda-laravel.test/api/contact/index?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "http://aws-lambda-laravel.test/api/contact/index?page=1",
"links": [
{
"url": null,
"label": "&laquo; Previous",
"active": false
},
{
"url": "http://aws-lambda-laravel.test/api/contact/index?page=1",
"label": "1",
"active": true
},
{
"url": null,
"label": "Next &raquo;",
"active": false
}
],
"next_page_url": null,
"path": "http://aws-lambda-laravel.test/api/contact/index",
"per_page": 15,
"prev_page_url": null,
"to": 10,
"total": 10
}

2. Show a Contact
   Request
   Method: GET
   Endpoint: /contact/:contact_id/show
   Description: Show a contact.

https://rfpcari.postman.co/workspace/Experimental~c673a9d6-89e8-4b23-882c-b7ede8eb41e1/request/19202170-a1827042-45cd-412b-891a-034e7b9cdae6?active-environment=3cf45d96-f621-4d29-8e64-22b1e2e24e96

Response
{
"status": "success",
"message": "Successfully retrieved selected contact",
"meta": {
"timestamp": "2023-12-20 01:23:46"
},
"data": {
"id": 1,
"name": "Violet Swift",
"gender": "Female",
"phone_number": "+13035413405",
"email": "amina01@yahoo.com",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
}
}

3. Create a Contact
   Request
   Method: POST
   Endpoint: /contact/store
   Description: Create a new contact.

    https://rfpcari.postman.co/workspace/Experimental~c673a9d6-89e8-4b23-882c-b7ede8eb41e1/request/19202170-b0136cea-fe2d-4919-95d7-4c8c48e95ed7?active-environment=3cf45d96-f621-4d29-8e64-22b1e2e24e96

Request Body FORM DATA
{
"name": "New Contact",
"gender": "Other",
"phone_number": "+1112233445",
"email": "new.contact@example.com"
}

Response
{
"status": "success",
"message": "Successfully store a contact",
"meta": {
"timestamp": "2023-12-20 01:22:24"
},
"data": {
"name": "Amir",
"gender": "Male",
"phone_number": "019991992132",
"email": "amir@gmail.com",
"updated_at": "2023-12-20T01:22:24.000000Z",
"created_at": "2023-12-20T01:22:24.000000Z",
"id": 11
}
}

4. Update a Contact
   Request
   Method: PUT
   Endpoint: /contact/:contact_id/update
   Description: Update an existing contact.
   https://rfpcari.postman.co/workspace/Experimental~c673a9d6-89e8-4b23-882c-b7ede8eb41e1/request/19202170-8c72e7e2-2022-4202-b118-2ff2feee4851?active-environment=3cf45d96-f621-4d29-8e64-22b1e2e24e96

Request Body Example
{
"phone_number": "+999888777"
}

Response

{
"status": "success",
"message": "Successfully update selected contact",
"meta": {
"timestamp": "2023-12-20 01:23:17"
},
"data": {
"id": 11,
"name": "Amir Ridwan",
"gender": "Male",
"phone_number": "0123456789",
"email": "amir@gmail.my",
"created_at": "2023-12-20T01:22:24.000000Z",
"updated_at": "2023-12-20T01:23:17.000000Z"
}
}

5. Delete a Contact
   Request
   Method: DELETE
   Endpoint: /contacts/:contact_id/delete
   Description: Delete a contact.
   https://rfpcari.postman.co/workspace/Experimental~c673a9d6-89e8-4b23-882c-b7ede8eb41e1/request/19202170-d0bdc862-793e-4af3-a40e-74afaf6f5cdc?active-environment=3cf45d96-f621-4d29-8e64-22b1e2e24e96

Response

{
"status": "success",
"message": "Successfully deleted selected contact",
"meta": {
"timestamp": "2023-12-20 01:28:27"
},
"data": {
"id": 9,
"name": "Dr. Arvilla Emard V",
"gender": "Male",
"phone_number": "1-754-736-4032",
"email": "cturner@gmail.com",
"created_at": "2023-12-19T15:16:26.000000Z",
"updated_at": "2023-12-19T15:16:26.000000Z"
}
}
