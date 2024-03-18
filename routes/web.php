<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Articles
$router->get("/articles", "ArticleController@getAll");
$router->get("/articles/{id}", "ArticleController@getOne");

//Authors
$router->get("/authors", "AuthorController@getAll");
$router->get("/authors/{id}", "AuthorController@getOne");

//Collaborators
$router->get("/collaborators", "CollaboratorController@getAll");
$router->get("/collaborators/{id}", "CollaboratorController@getOne");

//Contacts
$router->get("/contacts", "ContactController@getAll");
$router->get("/contacts/{id}", "ContactController@getOne");

//Donations
$router->get("/donations", "DonationController@getAll");
$router->get("/donations/{id}", "DonationController@getOne");

//Events
$router->get("/events", "EventController@getAll");
$router->get("/events/{id}", "EventController@getOne");

//Gethelp
$router->get("/gethelps", "GethelpController@getAll");
$router->get("/gethelps/{id}", "GethelpController@getOne");

//Teams
$router->get("/teammembers", "TeammemberController@getAll");
$router->get("/teammembers/{id}", "TeammemberController@getOne");

//Volunteers
$router->get("/volunteers", "VolunteerController@getAll");
$router->get("/volunteers/{id}", "VolunteerController@getOne");

//Articles_categorization
$router->get("/articles_categorizations", "Articles_categorizationController@getAll");
$router->get("/articles_categorizations/{id}", "Articles_categorizationController@getOne");


