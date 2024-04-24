<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class TestDatabase extends Controller
{
    public function test()
    {
        // Charger la bibliothèque de la base de données
        $db = \Config\Database::connect();

        // Vérifier si la connexion à la base de données est établie
        try {
            $db->initialize();
            if ($db->connect()) {
                // Exécuter une requête simple pour vérifier la connexion
                $query = $db->query('SELECT 1');
                if ($query) {
                    // Exécuter une requête d'insertion pour ajouter un utilisateur
                    $insertQuery = $db->query("INSERT INTO users (username, password) VALUES ('ian', '" . password_hash('123', PASSWORD_DEFAULT) . "')");
                    if ($insertQuery) {
                        echo 'Utilisateur ajouté avec succès.';
                    } else {
                        echo 'Échec de l\'ajout de l\'utilisateur.';
                    }
                } else {
                    echo 'Échec de l\'exécution de la requête.';
                }
            } else {
                echo 'Échec de la connexion à la base de données.';
            }
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}
