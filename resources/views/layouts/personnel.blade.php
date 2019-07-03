@extends('layouts.default')

@section('titre_page')
PERSONNEL
@endsection('titre_page')

@section('menu')
    <li class="header"><span>GESTION OPERATIONS PERSONNEL</span></li>
    <li>
        <a href="#" title="Employes">
            <i class="glyph-icon icon-linecons-tv"></i>
            <span>Employes</span>
        </a>
    </li>
     <li>
         <a href="#" title="Zones">
             <i class="glyph-icon icon-linecons-tv"></i>
             <span>Zones</span>
         </a>
     </li>
     <li>
         <a href="#" title="Affectations">
             <i class="glyph-icon icon-linecons-tv"></i>
             <span>Affectations</span>
         </a>
     </li>
@endsection('menu')



@section('contenu_page')
    <div id="page-title">
        <h2>@yield('titre_contenu', 'OPERATIONS PERSONNEL')</h2>
        <p>@yield('sous_titre_contenu', '[SOUS MODULE]')</p>

    </div>

    <div class="row">
        @yield('contenu_page', '[EN COURS DE DEVELOPPEMENT]')

    </div>
@endsection('contenu_page')

