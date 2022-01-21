<?php

namespace Controllers;

use Models\ContactModel;

class ContactController
{
    function listContacts() {
        $list = new ContactModel();
        $array = $list->getContacts();

        foreach ($array as $value) {
            echo "$value <br>"  ;
        }
    }
}

// Le controller ne s'occupe pas de l'affichage !