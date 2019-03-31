<?php
namespace Drupal\service_user\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Controller\ControllerBase;

class ServiceUserController extends ControllerBase
{
    protected $getservice;
    public function __construct($getservice)
    {
        $this->getservice = $getservice;
    }
    public static function create(ContainerInterface $container)
    {
        return new static($container->get('create_service.getUserEmail'));
    }
    public function displayEmail()
    {
        $email = $this->getservice->getEmail();
        $message =  "Welcome to Bootcamp.com <br> " . $email . "<br>Custom Service (create_service) is used to print email address of logged in user";
        return [
            '#markup' => $message
        ];
    }
}
