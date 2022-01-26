<?php

namespace Controllers;

use Models\ContactModel;
use Util\View;

class ContactController
{
    private $view;

    public function __construct()
    {
        $this->view = new View();
         if(ENVIRONMENT == 'development') {
            $whoops = new \Whoops\Run;
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
            $whoops->register();
        }
    }

    public function listContacts()
    {
        $contact = new ContactModel();

        $contacts = $contact->getContacts();

        echo $this->view->render('contacts/index', compact('contacts'));


    }

    public function __toString()
    {
        printf("Je suis le controlleur des contacts<br>");

    }
}