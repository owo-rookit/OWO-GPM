<?php

namespace App\Http\Controllers;

use App\Models\ArticleLivraison;
use App\Models\Commande;
use App\Models\Fournisseur;
use App\Models\Livraison;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

class LivraisonController extends Controller
{
    public function list(string $num_page= null)
    {
        $livraisons = DB::table('Livraison')
            ->select(DB::raw('count(ArticleLivraison.prix_entree) as total_livraison, id_commande, date_livraison, id_livraison'))
            ->leftJoin('ArticleLivraison', 'ArticleLivraison.id_livraison', '=', 'Livraison.id_livraison')
            ->paginate() ;
        return view("stock/livraison/list")->with(['livraisons'=>$livraisons]) ;
    }

    /**
     * Afficher les details d'une livraison
     * @param string $id_livraison l'id de la livraison.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function details(string $id_livraison)
    {
        $livraison = Livraison::where('Livraison.id_livraison', $id_livraison)
            ->leftJoin('Fournisseur', 'Fournisseur.id_fournisseur', '=', 'Livraison.id_fournisseur')->get()[0];

        $articles = DB::table("ArticleLivraison")
            ->select([
                    "Article.id_article",
                    "ArticleLivraison.prix_entree",
                    "ArticleLivraison.prix_sortie",
                    "Article.designation_article",
                    "ArticleLivraison.quantite",
                    "ArticleLivraison.date_peremption",
                    "ArticleLivraison.date_fabrication"
                ])
            ->leftJoin('Article', 'ArticleLivraison.id_article', '=', 'Article.id_article')
            ->where('ArticleLivraison.id_livraison', '=', $id_livraison)
            ->get() ;
        $total = 0 ;
        for($i = 0; $i<count($articles); ++$i)
            $total+= $articles[0]->prix_entree ;

        return view("stock/livraison/details")->with(['livraison'=>$livraison, 'articles'=>$articles, 'total'=>$total]) ;
    }

    /**
     * Imprimer les details de la livraison.
     * @param string $item_id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function print(string $item_id)
    {
        $livraison = Livraison::where('Livraison.id_livraison', $item_id)
            ->leftJoin('Fournisseur', 'Fournisseur.id_fournisseur', '=', 'Livraison.id_fournisseur')->get()[0];

        $articles = DB::table("ArticleLivraison")
            ->select([
                "Article.id_article",
                "ArticleLivraison.prix_entree",
                "ArticleLivraison.prix_sortie",
                "Article.designation_article",
                "ArticleLivraison.quantite",
                "ArticleLivraison.date_peremption",
                "ArticleLivraison.date_fabrication"])
            ->leftJoin('Article', 'ArticleLivraison.id_article', '=', 'Article.id_article')
            ->where('ArticleLivraison.id_livraison', '=', $item_id)
            ->get() ;
        $total = 0 ;
        for($i = 0; $i<count($articles); ++$i)
            $total+= $articles[0]->prix_entree ;
//        return                 view("stock/livraison/detailspart")->with(['livraison'=>$livraison, 'articles'=>$articles, 'total'=>$total]);
        try
        {
            $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', 3);
            $html2pdf->pdf->SetDisplayMode('fullpage');
            $html2pdf->writeHTML(
                view("stock/livraison/detailspart")->with(['livraison'=>$livraison, 'articles'=>$articles, 'total'=>$total])
            );
            $html2pdf->output('LIV-'.$livraison->id_livraison.'.pdf') ;
            return back()->with(["message"=>"Impression faite"]) ;
        }
        catch (Html2PdfException $e)
        {
            $html2pdf->clean();
            $formatter = new ExceptionFormatter($e);
            return redirect('/stock/livraison/details/'.$livraison->id_livraison)->with(["error"=>$formatter->getHtmlMessage()]) ;
        }
    }

    /**
     * Afficher le formulaire d'enregistrement d'un commande.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create_update()
    {
        // Affichage
        $commandes = Commande::where('livre', false)->orderBy('id_commande', 'asc')->get() ;
        $fournisseurs = Fournisseur::all() ;
        return view('stock.livraison.create_update',
            [
                'commandes'=>$commandes,
                'fournisseurs'=>$fournisseurs
            ]) ;
    }

    /**
     * Cette fonction traite le formulaire d'enregistrement de produit.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function do_create_update(Request $request)
    {
        $postData = $request->all() ;
        $livraison = new Livraison  ;
        $livraison->date_livraison = date("d-m-Y H:i:s") ;
        $livraison->id_commande = $postData["id_commande"] ;
        $livraison->id_fournisseur = $postData["id_fournisseur"] ;
        $livraison->num_bordereau = $postData["num_bordereau"] ;
        $livraison->num_facture = $postData["num_facture"] ;
        if($livraison->save())
        {
            $postDataKeys = array_keys($postData) ;
            for($i=0; $i<count($postDataKeys); $i++)
            {
                if(strstr($postDataKeys[$i], "id_article-") !== false)
                {
                    // Bulk insertion without verification
                    if($postData[$postDataKeys[$i+1]] != 0)
                    {
                        $articleLivraison = new ArticleLivraison() ;
                        $articleLivraison->id_article = $postData[$postDataKeys[$i]] ;
                        $articleLivraison->quantite = $postData[$postDataKeys[$i+1]] ;
                        $articleLivraison->prix_entree = $postData[$postDataKeys[$i+2]] ;
                        $articleLivraison->prix_sortie = $postData[$postDataKeys[$i+3]] ;
                        $articleLivraison->date_peremption = $postData[$postDataKeys[$i+4]] ;
                        $articleLivraison->date_fabrication = $postData[$postDataKeys[$i+5]] ;
                        $articleLivraison->id_livraison = $livraison->id_livraison ;
                        $articleLivraison->save() ;
                    }
                }
            }

            // Mise à jour de la commande pour livre = true
            if($this->isFullDelivered( intval( $postData["id_commande"] ) ))
            {
                $commande = Commande::find($postData["id_commande"]);
                $commande->livre = true ;
                // Bulk update
                $commande->save() ;
                return redirect("/stock/livraison/list")->with(["message"=>"Votre commande est maintenant entièrement livrée !"]) ;
            }

            return redirect("/stock/livraison/list")->with(["message"=>"Votre livraison a été enregistrée !"]) ;
        }
        return back()->with(["error"=>"Une erreur inattendue est survenue, veuillez réessayer !"]) ;
    }

    public function isFullDelivered(int $id_commande)
    {
        $articles = DB::table('Article')
            ->leftJoin('ArticleCommande', 'ArticleCommande.id_article', '=', 'Article.id_article')
            ->where('ArticleCommande.id_commande', '=', intval($id_commande))
            ->get(['Article.id_article', 'quantite']);
        // Vérifions s'il y a déjà une livraison pour certains produits
        $delivered = DB::table('ArticleLivraison')
            ->leftJoin('ArticleCommande', 'ArticleCommande.id_article', '=', 'ArticleLivraison.id_article')
            ->where('ArticleCommande.id_commande', '=', intval($id_commande))
            ->get(['ArticleLivraison.id_article', 'ArticleLivraison.quantite']);
        // Trie des deux collections
        $articlesArr = Collection::unwrap($articles) ;
        $deliveredArr = Collection::unwrap($delivered) ;
        if(count($deliveredArr) > 0)
        {
            for($i = 0; $i <count($deliveredArr); $i++)
            {
                for($j = 0; $j <count($articlesArr); $j++)
                {
                    if($deliveredArr[$i]->id_article == $articlesArr[$j]->id_article)
                    {
                        $flag = intval($articlesArr[$j]->quantite - $deliveredArr[$i]->quantite) ;
                        if($flag >= 1)
                        {
                            return false ;
                        }
                    }
                }
            }
            return true ;
        }
        return false ;
    }

    public function getItemsPart(string $id_commande)
    {
        $articles = DB::table('Article')
            ->leftJoin('ArticleCommande', 'ArticleCommande.id_article', '=', 'Article.id_article')
            ->where('ArticleCommande.id_commande', '=', intval($id_commande))
            ->get(['Article.id_article', 'designation_article', 'quantite']);
        // Vérifions s'il y a déjà une livraison pour certains produits
        $delivered = DB::table('ArticleLivraison')
            ->leftJoin('ArticleCommande', 'ArticleCommande.id_article', '=', 'ArticleLivraison.id_article')
            ->where('ArticleCommande.id_commande', '=', intval($id_commande))
            ->get(['ArticleLivraison.id_article', 'ArticleLivraison.quantite']);
        // Trie des deux collections
        $articlesArr = Collection::unwrap($articles) ;
        $deliveredArr = Collection::unwrap($delivered) ;
        if(count($deliveredArr) > 0)
        {
            for($i = 0; $i <count($deliveredArr); $i++)
            {
                if($deliveredArr[$i]->id_article == $articlesArr[$i]->id_article)
                {
                    $articlesArr[$i]->quantite -= $deliveredArr[$i]->quantite ;
                }
            }
        }

        return view('stock.livraison.itemspart', ['articles'=>$articlesArr, 'id'=>uniqid()]) ;
    }
}