<?php
namespace Drupal\create_service;

class CreateService
{
    protected $currentUser;
    function __construct($currentUser)
    {
        $this->currentUser = $currentUser;
    }
    function getEmail()
    {
        $email = $this->currentUser->getEmail();
        return $email;
    }
}
