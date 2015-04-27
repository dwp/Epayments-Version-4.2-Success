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

class ApplicationController < ActionController::Base
  before_filter :check_redirect_key

  def check_redirect_key
    if request[:access_key] != 'random_string' && cookies[:access_key] != 'random_string'
      redirect_to "/404.html" 
    elsif request[:access_key] == 'random_string'
      cookies.permanent[:access_key] = 'random_string'
    end
  end

end

?>
