<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use DI\Container;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/vendor/autoload.php';

// Create Container
$container = new Container();
AppFactory::setContainer($container);

// Set view in Container
$container->set('view', function() {
    return Twig::create('template', 
        //['cache' => 'path/to/cache']
    );
});

// Create App
$app = AppFactory::create();

// Add Twig-View Middleware
$app->add(TwigMiddleware::createFromContainer($app));


$app->get('/', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'index.html');
});

$app->get('/dashboard', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'dashboard.html');
});

$app->get('/bootstrap-components', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'bootstrap-components.html');
});

$app->get('/ui-cards', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'ui-cards.html');
});

$app->get('/widgets', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'widgets.html');
});

$app->get('/charts', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'charts.html');
});

$app->get('/form-components', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'form-components.html');
});

$app->get('/form-custom', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'form-custom.html');
});

$app->get('/form-samples', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'form-samples.html');
});

$app->get('/form-notifications', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'form-notifications.html');
});

$app->get('/table-basic', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'table-basic.html');
});

$app->get('/table-data-table', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'table-data-table.html');
});

$app->get('/page-login', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'page-login.html');
});

$app->get('/page-lockscreen', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'page-lockscreen.html');
});

$app->get('/page-user', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'page-user.html');
});

$app->get('/page-invoice', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'page-invoice.html');
});

$app->get('/page-calendar', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'page-calendar.html');
});

$app->get('/page-mailbox', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'page-mailbox.html');
});

$app->get('/page-error', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'page-error.html');
});

$app->get('/docs', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'docs.html');
});


$app->get('/blank-page', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'blank-page.html');
});

$app->run();
