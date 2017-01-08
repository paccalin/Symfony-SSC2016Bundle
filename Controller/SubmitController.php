<?php

namespace Surveys\SSC2016Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Surveys\SSC2016Bundle\Entity\Results;

/**
 * Controller de gestion et enregistrement des résultats
 */
class SubmitController extends Controller
{

	/**
	 * Confirmation ou infirmation de l'enregistrement des données à l'utilisateur
     * Appel des méthodes de vérifications et d'enregistrement
	 *
	 * @return     <Response>  ( Rendu d'une des pages' )
	 */
    public function indexAction()
    {
    	//Générer les données
    	$data = array();
        $data["errorType"] = '';
        $results = $this->convertData();
        
        if(!$results->isValid())
            $data["errorType"] = "missingFields";
        else{

            try {
                //Enregistrement dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($results);
                $em->flush();
            } catch (Exception $e) {
                //Gestion d'éventuelles erreurs innatendues
                $data["errorType"] = "dbError";
            }
        }

        //effectuer le rendu de la page
        if($data["errorType"] != '')
            $response = $this->render('SurveysSSC2016Bundle:Submit:failed-fr.html.twig', $data);
        else
            $response = $this->render('SurveysSSC2016Bundle:Submit:worked-fr.html.twig', $data);
        
        //retourner le rendu finit au kernel
        return $response;
    }


    /**
     * place les données dans un objet Result
     *
     * @return     <Result>  ( objet resultat )
     */
    public function convertData(){

        //instanciation de l'objet
        $results = new Results();

        //ajout des données dans l'objet
        $request = Request::createFromGlobals();
        $results->setItResponsiveness($request->request->get('it_responsiveness'));
        $results->setItCourtesy($request->request->get('it_courtesy'));
        $results->setItSolutions($request->request->get('it_solutions'));
        $results->setItIssuesHandeling($request->request->get('it_issuesHandeling'));
        $results->setItGlobal($request->request->get('it_global'));
        $results->setItImprove($request->request->get('it_improve'));
        $results->setItComm($request->request->get('it_comm'));
        $results->setItSystem($request->request->get('it_system'));
        $results->setItSecu($request->request->get('it_secu'));
        $results->setHaOfferCall($request->request->get('ha_offerCall'));
        $results->setHaNego($request->request->get('ha_nego'));
        $results->setHaContractFollowUp($request->request->get('ha_contractFollowUp'));
        $results->setHaInfoBuying($request->request->get('ha_infoBuying'));
        $results->setHaInfoSupplier($request->request->get('ha_infoSupplier'));
        $results->setComptaCerAnswer($request->request->get('compta_cerAnswer'));
        $results->setComptaTimeAnswer($request->request->get('compta_timeAnswer'));
        $results->setComptaImmo($request->request->get('compta_immo'));
        $results->setComptaRules($request->request->get('compta_rules'));
        $results->setComptaTimeBill($request->request->get('compta_timeBill'));
        $results->setComptaReceivables($request->request->get('compta_receivables'));
        $results->setComptaWho($request->request->get('compta_who'));
        $results->setGestionMission($request->request->get('gestion_mission'));
        $results->setGestionWho($request->request->get('gestion_who'));
        $results->setGestionAnswers($request->request->get('gestion_answers'));
        $results->setGestionGlobal($request->request->get('gestion_global'));


        return $results;
    }
}
