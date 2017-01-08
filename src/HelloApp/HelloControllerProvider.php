<?php
namespace HelloApp;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class HelloControllerProvider implements ControllerProviderInterface
{
  public function connect(Application $app) {
    $factory=$app['controllers_factory'];
    $factory->get('/',function(){
    	    return 'Hello world';
    });
    $factory->get('/bar',function(){
          return 'Bye world';
    });
    $factory->get('/foo','HelloApp\HelloControllerProvider::doFoo');
    return $factory;
  }
 
  public function home() {
    return 'Hello world';
  }
 
  public function doFoo() {
    return 'Bar';
  }
 
}
