<?php
namespace Drupal\create_service\Controller;

use Drupal\Core\Controller\ControllerBase;

class CreateServiceController extends ControllerBase
{
    function getUserEmail()
    {
        $user_email = \Drupal::service('create_service.getUserEmail');
        $email = $user_email->getEmail();
        $message = "Welcome to Bootcamp.com <br>" . "Your Email is " . $email;
        return [
            '#type' => '#markup',
            '#markup' => $message,
        ];
    }
}
