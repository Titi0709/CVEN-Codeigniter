<?php

namespace App\Controllers;

use App\Models\User_Model;

class LoginController extends BaseController
{
    public function login()
    {
        return view('Login');
    }

    public function processlogin()
    {
        // Récupérer les données du formulaire
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Charger le modèle UserModel
        $userModel = new User_Model();

        // Vérifier les informations de connexion
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Initialiser une session
            session()->start();

            // Stocker les informations de l'utilisateur dans la session
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username']
                // Ajoutez d'autres données utilisateur si nécessaire
            ];

            // Rediriger l'utilisateur
            return redirect()->to('/');
        } else {
            // Informations de connexion invalides, afficher un message d'erreur
            return redirect()->back()->withInput()->with('error', 'Nom d\'utilisateur ou mot de passe incorrect.');
        }
    }
}
