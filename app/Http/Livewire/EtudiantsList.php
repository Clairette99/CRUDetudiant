<?php

namespace App\Http\Livewire;

use App\Models\Etudiant;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class EtudiantsList extends Component
{
   
    public $Etudiants;
    public $state = [];

    public $updateMode = false;

    public function mount()
    {
        $this->etudiants = Etudiant::all();
    }

    private function resetInputFields(){
        $this->reset('state');
    }

    public function store()
    {
        $validator = Validator::make($this->state, [
            'nom'=> 'required',
            'prenom'=> 'required',
            'matricule'=> 'required',
            'niveau'=> 'required',
            'option'=> 'required',
            'parcours_type'=> 'required',
            'ue'=> 'required',
            'motif_requete'=> 'required',
            'exprimez_requete'=> 'required',
            'reponse_jury'=> 'required',
            'departement'=> 'required',
            'autre'=> 'required',
            'signature_etudiant'=> 'required',
        ])->validate();

        Etudiant::create($this->state);

        $this->reset('state');
        $this->etudiants = Etudiant::all();
    }

    public function edit($id)
    {
        $this->updateMode = true;

        $etudiant =Etudiant::find($id);

        $this->state = [
            'id' => $etudiant->id,
            'nom' => $etudiant->nom,
            'prenom'=> $etudiant->prenom,
            'matricule'=> $etudiant->matricule,
            'niveau'=> $etudiant->niveau,
            'option'=> $etudiant->option,
            'parcours_type'=> $etudiant->parcours_type,
            'ue'=> $etudiant->ue,
            'motif_requete'=> $etudiant->motif_requete,
            'exprimez_requete'=> $etudiant->exprimez_requete,
            'reponse_jury'=> $etudiant->reponse_jury,
            'departement'=> $etudiant->departement,
            'autre'=> $etudiant->autre,
            'signature_etudiant'=> $etudiant->signature_etudiant,
        ];
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset('state');
    }

    public function update()
    {
        $validator = Validator::make($this->state, [
            'nom'=> 'required',
            'prenom'=> 'required',
            'matricule'=> 'required',
            'niveau'=> 'required',
            'option'=> 'required',
            'parcours_type'=> 'required',
            'ue'=> 'required',
            'motif_requete'=> 'required',
            'exprimez_requete'=> 'required',
            'reponse_jury'=> 'required',
            'departement'=> 'required',
            'autre'=> 'required',
            'signature_etudiant'=> 'required',
        ])->validate();


        if ($this->state['id']) {
            $etudiant = Etudiant::find($this->state['id']);
            $etudiant->update([
                
                'nom'=> $this->state['nom'],
                'prenom'=> $this->state['prenom'],
                'matricule'=> $this->state['matricule'],
                'niveau'=> $this->state['niveau'],
                'option'=> $this->state['option'],
                'parcours_type'=> $this->state['parcours_type'],
                'ue'=> $this->state['ue'],
                'motif_requete'=> $this->state['motif_requete'],
                'exprimez_requete'=> $this->state['exprimez_requete'],
                'reponse_jury'=> $this->state['reponse_jury'],
                'departement'=> $this->state['departement'],
                'autre'=> $this->state['autre'],
                'signature_etudiant'=> $this->state['signature_etudiant'],
            ]);


            $this->updateMode = false;
            $this->reset('state');
            $this->etudiants = Etudiant::all();
        }
    }

    public function delete($id)
    {
        if($id){
            Etudiant::where('id',$id)->delete();
            $this->etudiants = Etudiant::all();
        }
    }


    public function render()
    {
        return view('livewire.etudiants-list');
    }
}


