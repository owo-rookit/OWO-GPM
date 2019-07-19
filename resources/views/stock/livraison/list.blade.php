@extends('layouts.stock')

@section('titre_contenu')
LIVRAISONS
@endsection('titre_contenu')

@section('sous_titre_contenu')
LISTE DES LIVRAISONS
@endsection('sous_titre_contenu')

@section('contenu_page')
    <div class="panel">
        <div class="panel panel-heading">
            <form class="form-inline">
                    <div class="form-group">
                        <input  class="form-control" required placeholder="rechercher une livraison" type="search"/>
                </div>
            </form>
        </div>
        <div class="panel-body">
            <div style="width: 100%" class="example-box-wrapper">
                <a href="{{url('/stock/livraison/create_update')}}" class="btn btn-primary">Enregister une nouvelle livraison</a>

                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                    <thead>
                        <tr>
                            <th>Date de livraison</th>
                            <th>État de la livraison</th>
                            <th>Reference de la commande</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($livraisons != null && count($livraisons) > 0)
                        @foreach($livraisons as $livraison)
                            <tr>
                                <td>{{$livraison->date_livraison}}</td>
                                <td>@if($livraison->supprime)Annulée @else En cours @endif</td>
                                <td><a href="{{url("/stock/commande/details/{$livraison->id_commande}")}}">cmd-{{$livraison->id_commande}}</a></td>
                                <td>
                                    <a title="voir les details de la livraison" href="{{url('/stock/livraison/details/l')}}">Details</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel-footer">
            <div class="text-center">
                {{$livraisons->links()}}
            </div>
        </div>
    </div>
@endsection('contenu_page')
