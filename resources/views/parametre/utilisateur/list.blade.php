@extends('layouts.parametre')

@section('titre_contenu')
UTILISATEURS 
@endsection('titre_contenu')

@section('sous_titre_contenu')
LISTE DES UTILISATEURS
@endsection('sous_titre_contenu')

@section('contenu')
    <div class="panel">
        <div class="panel-body">
            <div class=" title-hero">
                <a class="btn btn-border btn-alt border-green btn-link font-green col-md-2" href="{{ url
                ('/parametre/utilisateur/create_update') }}" title=""> <i class="glyph-icon icon-plus"></i>
                    <span>NOUVEL UTILISATEUR</span></a>

                <br><br>
            </div>

            <div class="example-box-wrapper">
                <table id="datatable-responsive" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM & PRENOM</th>
                    <th>LOGIN</th>
                    <th>SERVICE</th>
                    <th>POSTE</th>
                    <th>PROFIL</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($utilisateurs as $utilisateur)
                        <tr class="odd gradeX">
                            <td>{{$utilisateur->id_utilisateur}}</td>
                            <td>{{$utilisateur->nom_utilisateur.' '.$utilisateur->prenom_utilisateur}}</td>
                            <td>{{$utilisateur->login}}</td>
                            <td>{{$utilisateur->service_utilisateur}}</td>
                            <td>{{$utilisateur->poste_utilisateur}}</td>
                            {{-- <td>
                                @foreach($profils as $profil)
                                {{$utilisateur->id_profil==$profil->id_profil ? $profil->libelle_profil:''}}
                                @endforeach
                            </td> --}}
                            <td>{{$utilisateur->profil_temporaire}}</td>
                            <td class="center">
                                <a class="btn btn-blue-alt col-md-5" href="{{url('/parametre/utilisateur/create_update/'
                                .$utilisateur->id_utilisateur)}}" title="MODIFIER">
                                    <i class="glyph-icon icon-pencil"></i>
                                </a>
                                <form method="post" action=" {{url('delete_utilisateur')}}" class="col-md-6">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$utilisateur->id_utilisateur}}">

                                    <button type="button" class="btn btn-danger col-md-12" data-toggle="modal"
                                            title="SUPPRIMER" data-target="#myModal{{$utilisateur->id_utilisateur}}">
                                        <i class="glyph-icon icon-trash"></i>
                                    </button>

                                    <div class="modal fade bs-example-modal-sm" id="myModal{{$utilisateur->id_utilisateur}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Confirmation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>VOULEZ VOUS VRAIMENT SUPPRIMER?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                                                    <button type="submit" class="btn btn-primary">Oui</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection('contenu')
