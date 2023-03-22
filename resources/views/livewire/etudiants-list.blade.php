<div>
    <div class="row">
        <div class="form col-5">
            <form>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" wire:model="state.nom" id="nom" placeholder="entrez votre nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" wire:model="state.prenom" id="prenom" placeholder="entrez votre prenom">
                </div>
                <div class="mb-3">
                    <label for="matricule" class="form-label">Matricule</label>
                    <input type="text" class="form-control" wire:model="state.matricule" id="matricule" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="niveau" class="form-label">Niveau</label>
                    <input type="text" class="form-control" wire:model="state.niveau" id="niveau" placeholder="">
                </div><div class="mb-3">
                    <label for="option" class="form-label">Option</label>
                    <input type="text" class="form-control" wire:model="state.option" id="option" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="parcours_type" class="form-label">parcours-type</label>
                    <input type="text" class="form-control" wire:model="state.parcours_type" id="parcours_type" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="ue" class="form-label">UE</label>
                    <input type="text" class="form-control" wire:model="state.ue" id="ue" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="motif_requete" class="form-label">Motif de la requete</label>
                    <input type="text" class="form-control" wire:model="state.motif_requete" id="motif_requete" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exprimez_requete" class="form-label">Exprimez votre requete</label>
                    <textarea class="form-control" wire:model="state.exprimez_requete" id="exprimez_requete" placeholder=""></textarea>
                    
                </div>
                <div class="mb-3">
                    <label for="reponse_jury" class="form-label">Reponse du jury</label>
                    <textarea class="form-control" wire:model="state.reponse_jury" id="reponse_jury" placeholder=""></textarea>
                </div>
                <div class="mb-3">
                    <label for="departement" class="form-label">Departement</label>
                    <input type="text" class="form-control" wire:model="state.departement" id="departement" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="autre" class="form-label">Autre</label>
                    <input type="text" class="form-control" wire:model="state.autre" id="autre" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="signature_etudiant" class="form-label">Signature de l'etudiant</label>
                    <input type="text" class="form-control" wire:model="state.signature_etudiant" id="signature_etudiant" placeholder="">
                </div>

            
                <div class="mb-3">
                    <button type="reset" wire:click.prevent="cancel" class="btn btn-secondary">Annuler</button>
                    @if ($updateMode)
                        <button type="submit" wire:click.prevent="update" class="btn btn-primary">Mettre à jour</button>
                    @else
                        <button type="submit" wire:click.prevent="store" class="btn btn-primary">Enregistrer</button>
                    @endif
                </div>
            </form>
        </div>
        <div class=" col-7">
            <h3>List des etudiants</h3>
            <table class="table table-responsive table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Matricule</th>
                    <th scope="col">Niveau</th>
                    <th scope="col">Option</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($etudiants as $etudiant)
                        <tr>
                            <th scope="row">{{ $etudiant->id }}</th>
                            <td>{{ $etudiant->nom }}</td>
                            <td>{{ $etudiant->prenom }}</td>
                            <td>{{ $etudiant->matricule }}</td>
                            <td>{{ $etudiant->niveau }}</td>
                            <td>{{ $etudiant->option }}</td>
                                
                            <td>
                                <button type="button" wire:click.prevent="edit({{ $etudiant->id }})" class="btn btn-warning btn-sm">Modifier</button>
                                <button type="button" wire:click.prevent="delete({{ $etudiant->id }})" class="btn btn-danger btn-sm">Supprimer</button>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
