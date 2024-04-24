<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table = 'users'; // Nom de la table dans la base de données

    protected $primaryKey = 'id'; // Clé primaire de la table

    protected $allowedFields = ['username', 'email', 'password']; // Champs autorisés à être insérés ou mis à jour

    // Autres propriétés et méthodes du modèle...

}
