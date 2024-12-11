<?php

namespace App\Observers;

use App\Models\User;

// OBSERVATEUR POUR AJOUTER UN CREDIT DE VALEUR 10 A LA CREATION DE CHAQUE UTILISATEUR
class UserObserver
{
    public function creating(User $user)
    {
        $user->available_credits = 10;
    }
}
