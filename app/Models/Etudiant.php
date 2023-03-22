<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
      'nom',
      'prenom',
      'matricule',
      'niveau',
      'option',
      'parcours_type',
      'ue',
      'motif_requete',
      'exprimez_requete',
      'reponse_jury',
      'departement',
      'autre',
      'signature_etudiant',
  ];

}
