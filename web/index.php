<?php
/*header('Location: /start.htm');*/

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return 'Hello';
});

$app->run();

USERS = { "user" => "secret" }

before_filter :authenticate

def authenticate
  authenticate_or_request_with_http_digest("Application") do |name|
    USERS[name]
  end
end

?>
