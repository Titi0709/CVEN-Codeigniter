<?php

namespace App\Controllers;

use App\Models\User_model; // Importez la classe User_model

class SignupController extends BaseController
{
    public function signup()
    {
        // Charge la vue d'inscription
        return view('signup');
    }

    public function processSignup()
{
    // Récupère les données du formulaire
    $userData = [
        'username' => $this->request->getPost('username'),
        'email'    => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        // Ajoutez d'autres champs selon vos besoins
    ];
     // Vérification du mot de passe
$password = $this->request->getPost('password');
if (
    !preg_match('/[A-Z]/', $password) || // Vérifie s'il y a au moins une lettre majuscule
    !preg_match('/[0-9].*[0-9].*[0-9]/', $password) || // Vérifie s'il y a au moins trois chiffres
    !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password) // Vérifie s'il y a au moins un caractère spécial
) {
    return redirect()->to('/signup')->withInput()->with('error', 'Le mot de passe doit contenir au moins une lettre majuscule, trois chiffres et un caractère spécial.');
}


   

    // Validez les données (vous pouvez utiliser la bibliothèque de validation de CodeIgniter)

    // Vérifie si le nom d'utilisateur est déjà utilisé
    $userModel = new User_model();
    $existingUser = $userModel->where('username', $userData['username'])->first();
    
    if ($existingUser) {
        // Nom d'utilisateur déjà utilisé, affichez un message d'erreur ou redirigez l'utilisateur vers la page d'inscription avec un message d'erreur
        return redirect()->to('/signup')->withInput()->with('error', 'Le nom d\'utilisateur est déjà utilisé.');
    }
    $existingUser = $userModel->where('email', $userData['email'])->first();
        if ($existingUser) {
            return redirect()->to('/signup')->withInput()->with('error', 'Cette adresse e-mail est déjà associée à un compte.');
        }
 
    // Si le nom d'utilisateur n'est pas déjà utilisé, enregistrez l'utilisateur dans la base de données
    $userModel->insert($userData);

    // Redirigez l'utilisateur vers une page de confirmation ou une autre page appropriée
    return redirect()->to('/login')->with('success', 'Inscription réussie. Vous pouvez maintenant vous connecter.');
}

}
