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
$router->get("/articlesandauthors", "ArticleController@getAllArticleAuthor");
$router->get("/articlesandauthors/{id}", "ArticleController@getOneArticleAuthor");
$router->post("/articles/add", "ArticleController@save");
$router->post('/articles/edit/{id}', 'ArticleController@update');
$router->delete('/articles/delete/{id}', 'ArticleController@delete');

//Authors
$router->get("/authors", "AuthorController@getAll");
$router->get("/authors/{id}", "AuthorController@getOne");
$router->post("/authors/add", "AuthorController@save");
$router->post('/authors/edit/{id}', 'AuthorController@update');
$router->delete('/authors/delete/{id}', 'AuthorController@delete');

//Collaborators
$router->get("/collaborators", "CollaboratorController@getAll");
$router->get("/collaborators/{id}", "CollaboratorController@getOne");
$router->post("/collaborators/add", "CollaboratorController@save");
$router->post('/collaborators/edit/{id}', 'CollaboratorController@update');
$router->delete('/collaborators/delete/{id}', 'CollaboratorController@delete');

//Contacts
$router->get("/contacts", "ContactController@getAll");
$router->get("/contacts/{id}", "ContactController@getOne");
$router->post("/contacts/add", "ContactController@save");
$router->post('/contacts/edit/{id}', 'ContactController@update');
$router->delete('/contacts/delete/{id}', 'ContactController@delete');

//Donations
$router->get("/donations", "DonationController@getAll");
$router->get("/donations/{id}", "DonationController@getOne");
$router->post("/donations/add", "DonationController@save");
$router->post('/donations/edit/{id}', 'DonationController@update');
$router->delete('/donations/delete/{id}', 'DonationController@delete');

//Events
$router->get("/events", "EventController@getAll");
$router->get("/events/{id}", "EventController@getOne");
$router->post("/events/add", "EventController@save");
$router->post('/events/edit/{id}', 'EventController@update');
$router->delete('/events/delete/{id}', 'EventController@delete');

//Gethelp
$router->get("/gethelps", "GethelpController@getAll");
$router->get("/gethelps/{id}", "GethelpController@getOne");
$router->post("/gethelps/add", "GethelpController@save");
$router->post('/gethelps/edit/{id}', 'GethelpController@update');
$router->delete('/gethelps/delete/{id}', 'GethelpController@delete');

//Teams
$router->get("/teammembers", "TeammemberController@getAll");
$router->get("/teammembers/{id}", "TeammemberController@getOne");
$router->post("/teammembers/add", "TeammemberController@save");
$router->post('/teammembers/edit/{id}', 'TeammemberController@update');
$router->delete('/teammembers/delete/{id}', 'TeammemberController@delete');

//Volunteers
$router->get("/volunteers", "VolunteerController@getAll");
$router->get("/volunteers/{id}", "VolunteerController@getOne");
$router->post("/volunteers/add", "VolunteerController@save");
$router->post('/volunteers/edit/{id}', 'VolunteerController@update');
$router->delete('/volunteers/delete/{id}', 'VolunteerController@delete');

//Newsletter
$router->get("/newsletter", "NewsletterController@getAll");
$router->get("/newsletter/{id}", "NewsletterController@getOne");
$router->post("/newsletter/add", "NewsletterController@save");
$router->post('/newsletter/edit/{id}', 'NewsletterController@update');
$router->delete('/newsletter/delete/{id}', 'NewsletterController@delete');


//Articles_categorization
$router->get("/articles_categorizations", "Articles_categorizationController@getAll");
$router->get("/articles_categorizations/{id}", "Articles_categorizationController@getOne");

//Roles
$router->get("/roles", "RoleController@getAll");
$router->get("/roles/{id}", "RoleController@getOne");

//Types
$router->get("/types", "TypeController@getAll");
$router->get("/types/{id}", "TypeController@getOne");



