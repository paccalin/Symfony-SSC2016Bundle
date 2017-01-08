<?php

namespace Surveys\SSC2016Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Controller de l'affichage du formulaire et de la page d'accueil
 */
class SurveyController extends Controller
{

	/**
	 * Page d'accueil de l'enquête
	 *
	 * @return     <Response>  ( Rendu de la page )
	 */
    public function indexAction()
    {
    	//Générer les données
    	$data = array();

    	//effectuer le rendu de la page
    	$response = $this->render('SurveysSSC2016Bundle:Survey:index-fr.html.twig', $data);
        
        //retourner le rendu finit au kernel
        return $response;
    }

    /**
     * Page d'affichage du formulaire
     *
     * @return     <Response>  ( Rendu de la page )
     */
    public function formAction()
    {
    	//Générer les données
    	$data = array();

    	//effectuer le rendu de la page
    	$response = $this->render('SurveysSSC2016Bundle:Survey:form-fr.html.twig', $data);
        
        //retourner le rendu finit au kernel
        return $response;
    }
}
