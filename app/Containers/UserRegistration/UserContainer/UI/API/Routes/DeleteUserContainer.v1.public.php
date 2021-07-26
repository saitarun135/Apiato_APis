<?php

/**
 * @apiGroup           UserContainer
 * @apiName            deleteUserContainer
 *
 * @api                {DELETE} /v1/postuser/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\UserRegistration\UserContainer\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('postuser/{id}', [Controller::class, 'deleteUserContainer'])
    ->name('api_usercontainer_delete_user_container')
    ->middleware(['auth:api']);

