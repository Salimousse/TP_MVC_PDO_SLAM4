<?php
namespace controllers;

use controllers\base\WebController;
use models\classes\Client;
use models\ClientsModele;
use utils\Template;

class ClientController extends WebController
{

    function listeClients(): string
    {
        $clientsModele = new ClientsModele();
        $clients = $clientsModele->liste();
        
       
        return Template::render("views/liste/liste.php", ['clients' => $clients]);
    }


}