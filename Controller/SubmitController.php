<?php

namespace Surveys\SSC2016Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SubmitController extends Controller
{

	/**
	 * Confirmation ou infirmation de l'enregistrement des données à l'utilisateur
     * Appel des méthodes de vérifications
	 *
	 * @return     <Response>  ( Rendu d'une des pages' )
	 */
    public function indexAction()
    {
    	//Générer les données
    	$data = array();
        $valeursOk = false;
        $results = $this->verifData();
        
        if($results != null)
            $valeursOk = true;


        //effectuer le rendu de la page
        if(!$valeursOk)
            $response = $this->render('SurveysSSC2016Bundle:Submit:failed-fr.html.twig', $data);
        else
            $response = $this->render('SurveysSSC2016Bundle:Submit:worked-fr.html.twig', $data);
        
        //retourner le rendu finit au kernel
        return $response;
    }


    /**
     * Vérifie lé présence et la validité de toutes les données
     * Place ces dernières dans un tableau associatif bidimentionel
     *
     * @return     <array>  ( Résultats; null si non valide )
     */
    public function verifData(){
        //nommage des paramètres requis
        $pagesResult = array();
        $pagesResult["IT"] = array(
            'it-responsiveness' => '',
            'it-courtesy' => '',
            'it-solutions' => '',
            'it-issuesHandeling' => '',
            'it-global' => '',
            'it-improve' => '',
            'it-comm' => '',
            'it-system' => '',
            'it-secu' => '');
        $pagesResult["HA"] = array(
            'ha-offerCall' => '',
            'ha-nego' => '',
            'ha-contractFollowUp' => '',
            'ha-infoBuying' => '',
            'ha-infoSupplier' => '');
        $pagesResult["Compta"] = array(
            'compta-cerAnswer' => '',
            'compta-timeAnswer' => '',
            'compta-immo' => '',
            'compta-rules' => '',
            'compta-timeBill' => '',
            'compta-receivables' => '',
            'compta-who' => '');
        $pagesResult["Gestion"] = array(
            'gestion-mission' => '',
            'gestion-who' => '',
            'gestion-answers' => '',
            'gestion-global' => '');


        $request = Request::createFromGlobals();

        foreach ($pagesResult as $aPage => $someResults) {
            foreach ($someResults as $anIndex => $aValue) {
                //vérification de l'existance de la valeur
                if ($request->request->get($anIndex) == null)
                    return null;

                $provValue = $request->request->get($anIndex);

                //vérification de la validité de la valeur
                switch ($anIndex) {
                    case 'it-improve':
                        if($provValue == '')
                            return null;
                        break;
                    
                    default:
                        if(!$this->fiveRadioCheck($provValue))
                            return null;
                        break;
                }
                $pagesResult[$aPage][$anIndex] = $provValue;
            }
        }

        return $pagesResult;
    }

    /**
     * Vérifie la validité du résultat d'une radioBox à cinq options;
     *
     * @param      <string>  $pValue  le résultat de la radioBox
     *
     * @return     <bool>  ( facteur de validité )
     */
    public function fiveRadioCheck($pValue){
        $possibleValues = array('-1', '0', '1', '2', '3');
        foreach ($possibleValues as $aPossibleValue) {
            if($pValue == $aPossibleValue)
                return true;
        }

        return false;
    }
}
