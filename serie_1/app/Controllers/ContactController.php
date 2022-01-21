<?php

namespace Controllers;

use Models\ContactModel;
use Util\View;

class ContactController
{
    public function listContacts()
    {
        $model = new ContactModel();
        $contacts = $model->getContacts();

        $view = new View();
        echo $view->render('contacts/index', compact('contacts'));
    }
}

// Le controller ne s'occupe pas de l'affichage !