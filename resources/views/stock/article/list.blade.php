@extends('layouts.stock')

@section('titre_contenu')
Gestion stock 
@endsection('titre_contenu')

@section('sous_titre_contenu')
List des articles
@endsection('sous_titre_contenu')

@section('contenu_page')
    <div class="panel">
        <div class="panel-body">
            <div class="panel panel-heading">
                @if(Session::has('message'))
                    @include('stock.error', ['type'=>'info', 'key'=>'message'])
                @endif

                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Rechercher un article">
                    </div>
                </form>
            </div>
            <div class="example-box-wrapper">
                <a href="{{url('/stock/article/create_update')}}" style="float: left;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Ajouter un nouveau produit
                </a>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                    <thead>
                        <tr>
                            <th>Code article</th>
                            <th>Designation</th>
                            <th>Famille</th>
                            <th>Consommable</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($items) > 0)
                            @foreach($items as $item)
                                <tr>
                                    <td>{{strtoupper(substr($item->designation_article, 0, 3))}}-{{$item->id_article}}</td>
                                    <td>{{$item->designation_article}}</td>
                                    <td>Savon de marseille</td>
                                    <td>
                                        @if($item->consommable == null)
                                            Non
                                        @else
                                            Oui
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-link" type="button" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a title="details" href="#">details</a></li>
                                                <li><a title="modifier" href="{{url("/stock/article/create_update/{$item->id_article}")}}">modifier</a></li>
                                                <li><a title="supprimer" href="#">supprimer</a></li>
                                            </ul>
                                        </div>
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
                <ul class="pagination">
                    {{$items->links()}}
                </ul>
            </div>
        </div>
    </div>
@endsection('contenu_page')