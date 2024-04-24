<?php
namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table = 'demandereservation'; // Nom de la table dans la base de données
    protected $primaryKey = 'ID'; // Clé primaire de la table
    protected $allowedFields = ['Date_de_Demande', 'Date_de_fin', 'Chambre', 'user_id']; // Champs autorisés à être insérés ou mis à jour
    public function getAllReservations()
    {
        return $this->findAll();
    }
}


