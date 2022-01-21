<?php

namespace Controllers;

use Models\ContactModel;

class ContactController
{
    public function listContacts() {
        $model = new ContactModel();
        $contacts = $model->getContacts();

        require(__DIR__.'/../views/contacts/index.php');
    }
}

// Le controller ne s'occupe pas de l'affichage !