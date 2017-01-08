<?php

namespace Surveys\SSC2016Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Results
 *
 * @ORM\Table(name="results")
 * @ORM\Entity(repositoryClass="Surveys\SSC2016Bundle\Repository\ResultsRepository")
 */
class Results
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="it_responsiveness", type="smallint")
     */
    private $itResponsiveness;

    /**
     * @var int
     *
     * @ORM\Column(name="it_courtesy", type="smallint")
     */
    private $itCourtesy;

    /**
     * @var int
     *
     * @ORM\Column(name="it_solutions", type="smallint")
     */
    private $itSolutions;

    /**
     * @var int
     *
     * @ORM\Column(name="it_issuesHandeling", type="smallint")
     */
    private $itIssuesHandeling;

    /**
     * @var int
     *
     * @ORM\Column(name="it_global", type="smallint")
     */
    private $itGlobal;

    /**
     * @var text
     *
     * @ORM\Column(name="it_improve", type="text")
     */
    private $itImprove;

    /**
     * @var int
     *
     * @ORM\Column(name="it_comm", type="smallint")
     */
    private $itComm;

    /**
     * @var int
     *
     * @ORM\Column(name="it_system", type="smallint")
     */
    private $itSystem;

    /**
     * @var int
     *
     * @ORM\Column(name="it_secu", type="smallint")
     */
    private $itSecu;

    /**
     * @var int
     *
     * @ORM\Column(name="ha_offerCall", type="smallint")
     */
    private $haOfferCall;

    /**
     * @var int
     *
     * @ORM\Column(name="ha_nego", type="smallint")
     */
    private $haNego;

    /**
     * @var int
     *
     * @ORM\Column(name="ha_contractFollowUp", type="smallint")
     */
    private $haContractFollowUp;

    /**
     * @var int
     *
     * @ORM\Column(name="ha_infoBuying", type="smallint")
     */
    private $haInfoBuying;

    /**
     * @var int
     *
     * @ORM\Column(name="ha_infoSupplier", type="smallint")
     */
    private $haInfoSupplier;

    /**
     * @var int
     *
     * @ORM\Column(name="compta_cerAnswer", type="smallint")
     */
    private $comptaCerAnswer;

    /**
     * @var int
     *
     * @ORM\Column(name="compta_timeAnswer", type="smallint")
     */
    private $comptaTimeAnswer;

    /**
     * @var int
     *
     * @ORM\Column(name="compta_immo", type="smallint")
     */
    private $comptaImmo;

    /**
     * @var int
     *
     * @ORM\Column(name="compta_rules", type="smallint")
     */
    private $comptaRules;

    /**
     * @var int
     *
     * @ORM\Column(name="compta_timeBill", type="smallint")
     */
    private $comptaTimeBill;

    /**
     * @var int
     *
     * @ORM\Column(name="compta_receivables", type="smallint")
     */
    private $comptaReceivables;

    /**
     * @var int
     *
     * @ORM\Column(name="compta_who", type="smallint")
     */
    private $comptaWho;

    /**
     * @var int
     *
     * @ORM\Column(name="gestion_mission", type="smallint")
     */
    private $gestionMission;

    /**
     * @var int
     *
     * @ORM\Column(name="gestion_who", type="smallint")
     */
    private $gestionWho;

    /**
     * @var int
     *
     * @ORM\Column(name="gestion_answers", type="smallint")
     */
    private $gestionAnswers;

    /**
     * @var int
     *
     * @ORM\Column(name="gestion_global", type="smallint")
     */
    private $gestionGlobal;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set itResponsiveness
     *
     * @param integer $itResponsiveness
     *
     * @return Results
     */
    public function setItResponsiveness($itResponsiveness)
    {
        $this->itResponsiveness = $itResponsiveness;

        return $this;
    }

    /**
     * Get itResponsiveness
     *
     * @return int
     */
    public function getItResponsiveness()
    {
        return $this->itResponsiveness;
    }

    /**
     * Set itCourtesy
     *
     * @param integer $itCourtesy
     *
     * @return Results
     */
    public function setItCourtesy($itCourtesy)
    {
        $this->itCourtesy = $itCourtesy;

        return $this;
    }

    /**
     * Get itCourtesy
     *
     * @return int
     */
    public function getItCourtesy()
    {
        return $this->itCourtesy;
    }

    /**
     * Set itSolutions
     *
     * @param integer $itSolutions
     *
     * @return Results
     */
    public function setItSolutions($itSolutions)
    {
        $this->itSolutions = $itSolutions;

        return $this;
    }

    /**
     * Get itSolutions
     *
     * @return int
     */
    public function getItSolutions()
    {
        return $this->itSolutions;
    }

    /**
     * Set itIssuesHandeling
     *
     * @param integer $itIssuesHandeling
     *
     * @return Results
     */
    public function setItIssuesHandeling($itIssuesHandeling)
    {
        $this->itIssuesHandeling = $itIssuesHandeling;

        return $this;
    }

    /**
     * Get itIssuesHandeling
     *
     * @return int
     */
    public function getItIssuesHandeling()
    {
        return $this->itIssuesHandeling;
    }

    /**
     * Set itGlobal
     *
     * @param integer $itGlobal
     *
     * @return Results
     */
    public function setItGlobal($itGlobal)
    {
        $this->itGlobal = $itGlobal;

        return $this;
    }

    /**
     * Get itGlobal
     *
     * @return int
     */
    public function getItGlobal()
    {
        return $this->itGlobal;
    }

    /**
     * Set itImprove
     *
     * @param string $itImprove
     *
     * @return Results
     */
    public function setItImprove($itImprove)
    {
        $this->itImprove = $itImprove;

        return $this;
    }

    /**
     * Get itImprove
     *
     * @return string
     */
    public function getItImprove()
    {
        return $this->itImprove;
    }

    /**
     * Set itComm
     *
     * @param integer $itComm
     *
     * @return Results
     */
    public function setItComm($itComm)
    {
        $this->itComm = $itComm;

        return $this;
    }

    /**
     * Get itComm
     *
     * @return int
     */
    public function getItComm()
    {
        return $this->itComm;
    }

    /**
     * Set itSystem
     *
     * @param integer $itSystem
     *
     * @return Results
     */
    public function setItSystem($itSystem)
    {
        $this->itSystem = $itSystem;

        return $this;
    }

    /**
     * Get itSystem
     *
     * @return int
     */
    public function getItSystem()
    {
        return $this->itSystem;
    }

    /**
     * Set itSecu
     *
     * @param integer $itSecu
     *
     * @return Results
     */
    public function setItSecu($itSecu)
    {
        $this->itSecu = $itSecu;

        return $this;
    }

    /**
     * Get itSecu
     *
     * @return int
     */
    public function getItSecu()
    {
        return $this->itSecu;
    }

    /**
     * Set haOfferCall
     *
     * @param integer $haOfferCall
     *
     * @return Results
     */
    public function setHaOfferCall($haOfferCall)
    {
        $this->haOfferCall = $haOfferCall;

        return $this;
    }

    /**
     * Get haOfferCall
     *
     * @return int
     */
    public function getHaOfferCall()
    {
        return $this->haOfferCall;
    }

    /**
     * Set haNego
     *
     * @param integer $haNego
     *
     * @return Results
     */
    public function setHaNego($haNego)
    {
        $this->haNego = $haNego;

        return $this;
    }

    /**
     * Get haNego
     *
     * @return int
     */
    public function getHaNego()
    {
        return $this->haNego;
    }

    /**
     * Set haContractFollowUp
     *
     * @param integer $haContractFollowUp
     *
     * @return Results
     */
    public function setHaContractFollowUp($haContractFollowUp)
    {
        $this->haContractFollowUp = $haContractFollowUp;

        return $this;
    }

    /**
     * Get haContractFollowUp
     *
     * @return int
     */
    public function getHaContractFollowUp()
    {
        return $this->haContractFollowUp;
    }

    /**
     * Set haInfoBuying
     *
     * @param integer $haInfoBuying
     *
     * @return Results
     */
    public function setHaInfoBuying($haInfoBuying)
    {
        $this->haInfoBuying = $haInfoBuying;

        return $this;
    }

    /**
     * Get haInfoBuying
     *
     * @return int
     */
    public function getHaInfoBuying()
    {
        return $this->haInfoBuying;
    }

    /**
     * Set haInfoSupplier
     *
     * @param integer $haInfoSupplier
     *
     * @return Results
     */
    public function setHaInfoSupplier($haInfoSupplier)
    {
        $this->haInfoSupplier = $haInfoSupplier;

        return $this;
    }

    /**
     * Get haInfoSupplier
     *
     * @return int
     */
    public function getHaInfoSupplier()
    {
        return $this->haInfoSupplier;
    }

    /**
     * Set comptaCerAnswer
     *
     * @param integer $comptaCerAnswer
     *
     * @return Results
     */
    public function setComptaCerAnswer($comptaCerAnswer)
    {
        $this->comptaCerAnswer = $comptaCerAnswer;

        return $this;
    }

    /**
     * Get comptaCerAnswer
     *
     * @return int
     */
    public function getComptaCerAnswer()
    {
        return $this->comptaCerAnswer;
    }

    /**
     * Set comptaTimeAnswer
     *
     * @param integer $comptaTimeAnswer
     *
     * @return Results
     */
    public function setComptaTimeAnswer($comptaTimeAnswer)
    {
        $this->comptaTimeAnswer = $comptaTimeAnswer;

        return $this;
    }

    /**
     * Get comptaTimeAnswer
     *
     * @return int
     */
    public function getComptaTimeAnswer()
    {
        return $this->comptaTimeAnswer;
    }

    /**
     * Set comptaImmo
     *
     * @param integer $comptaImmo
     *
     * @return Results
     */
    public function setComptaImmo($comptaImmo)
    {
        $this->comptaImmo = $comptaImmo;

        return $this;
    }

    /**
     * Get comptaImmo
     *
     * @return int
     */
    public function getComptaImmo()
    {
        return $this->comptaImmo;
    }

    /**
     * Set comptaRules
     *
     * @param integer $comptaRules
     *
     * @return Results
     */
    public function setComptaRules($comptaRules)
    {
        $this->comptaRules = $comptaRules;

        return $this;
    }

    /**
     * Get comptaRules
     *
     * @return int
     */
    public function getComptaRules()
    {
        return $this->comptaRules;
    }

    /**
     * Set comptaTimeBill
     *
     * @param integer $comptaTimeBill
     *
     * @return Results
     */
    public function setComptaTimeBill($comptaTimeBill)
    {
        $this->comptaTimeBill = $comptaTimeBill;

        return $this;
    }

    /**
     * Get comptaTimeBill
     *
     * @return int
     */
    public function getComptaTimeBill()
    {
        return $this->comptaTimeBill;
    }

    /**
     * Set comptaReceivables
     *
     * @param integer $comptaReceivables
     *
     * @return Results
     */
    public function setComptaReceivables($comptaReceivables)
    {
        $this->comptaReceivables = $comptaReceivables;

        return $this;
    }

    /**
     * Get comptaReceivables
     *
     * @return int
     */
    public function getComptaReceivables()
    {
        return $this->comptaReceivables;
    }

    /**
     * Set comptaWho
     *
     * @param integer $comptaWho
     *
     * @return Results
     */
    public function setComptaWho($comptaWho)
    {
        $this->comptaWho = $comptaWho;

        return $this;
    }

    /**
     * Get comptaWho
     *
     * @return int
     */
    public function getComptaWho()
    {
        return $this->comptaWho;
    }

    /**
     * Set gestionMission
     *
     * @param integer $gestionMission
     *
     * @return Results
     */
    public function setGestionMission($gestionMission)
    {
        $this->gestionMission = $gestionMission;

        return $this;
    }

    /**
     * Get gestionMission
     *
     * @return int
     */
    public function getGestionMission()
    {
        return $this->gestionMission;
    }

    /**
     * Set gestionWho
     *
     * @param integer $gestionWho
     *
     * @return Results
     */
    public function setGestionWho($gestionWho)
    {
        $this->gestionWho = $gestionWho;

        return $this;
    }

    /**
     * Get gestionWho
     *
     * @return int
     */
    public function getGestionWho()
    {
        return $this->gestionWho;
    }

    /**
     * Set gestionAnswers
     *
     * @param integer $gestionAnswers
     *
     * @return Results
     */
    public function setGestionAnswers($gestionAnswers)
    {
        $this->gestionAnswers = $gestionAnswers;

        return $this;
    }

    /**
     * Get gestionAnswers
     *
     * @return int
     */
    public function getGestionAnswers()
    {
        return $this->gestionAnswers;
    }

    /**
     * Set gestionGlobal
     *
     * @param integer $gestionGlobal
     *
     * @return Results
     */
    public function setGestionGlobal($gestionGlobal)
    {
        $this->gestionGlobal = $gestionGlobal;

        return $this;
    }

    /**
     * Get gestionGlobal
     *
     * @return int
     */
    public function getGestionGlobal()
    {
        return $this->gestionGlobal;
    }

    public function isfull(){

    }

    public function isValid(){
        $properties = get_object_vars($this);

        //test de chaque propriété
        foreach ($properties as $name => $value) {
            if($value == null && $name != 'id')
                return false;

            switch ($name) {
                case 'id':
                    //do nothing
                    break;

                case 'itImprove':
                    if($value == "")
                        return false;
                    break;

                default:
                    if(!$this->fiveRadioCheck($value))
                        return false;
                    break;
            }
        }

        return true;
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

