<?php

namespace web;

require_once __DIR__.'/../app/Controllers/ContactController.php';
require_once __DIR__.'/../app/Models/ContactModel.php';

use Controllers\ContactController;

$listContacts = new ContactController();

$listContacts->listContacts();