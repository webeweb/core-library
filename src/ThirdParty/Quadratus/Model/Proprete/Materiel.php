<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Materiel model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Materiel {

    /**
     * Code barre.
     *
     * @var string
     */
    private $codeBarre;

    /**
     * Code materiel.
     *
     * @var string
     */
    private $codeMateriel;

    /**
     * Date achat.
     *
     * @var DateTime
     */
    private $dateAchat;

    /**
     * Date debut amortissement.
     *
     * @var DateTime
     */
    private $dateDebutAmortissement;

    /**
     * Date fin amortissement.
     *
     * @var DateTime
     */
    private $dateFinAmortissement;

    /**
     * Date fin service.
     *
     * @var DateTime
     */
    private $dateFinService;

    /**
     * Date mise en service.
     *
     * @var DateTime
     */
    private $dateMiseEnService;

    /**
     * Designation1.
     *
     * @var string
     */
    private $designation1;

    /**
     * Designation2.
     *
     * @var string
     */
    private $designation2;

    /**
     * Designation3.
     *
     * @var string
     */
    private $designation3;

    /**
     * Designation4.
     *
     * @var string
     */
    private $designation4;

    /**
     * Designation5.
     *
     * @var string
     */
    private $designation5;

    /**
     * Montant amortissement.
     *
     * @var float
     */
    private $montantAmortissement;

    /**
     * Numero serie.
     *
     * @var string
     */
    private $numeroSerie;

    /**
     * Val achat euro.
     *
     * @var float
     */
    private $valAchatEuro;

    /**
     * Val achat f r f.
     *
     * @var float
     */
    private $valAchatFRF;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code barre.
     *
     * @return string Returns the code barre.
     */
    public function getCodeBarre() {
        return $this->codeBarre;
    }

    /**
     * Get the code materiel.
     *
     * @return string Returns the code materiel.
     */
    public function getCodeMateriel() {
        return $this->codeMateriel;
    }

    /**
     * Get the date achat.
     *
     * @return DateTime Returns the date achat.
     */
    public function getDateAchat() {
        return $this->dateAchat;
    }

    /**
     * Get the date debut amortissement.
     *
     * @return DateTime Returns the date debut amortissement.
     */
    public function getDateDebutAmortissement() {
        return $this->dateDebutAmortissement;
    }

    /**
     * Get the date fin amortissement.
     *
     * @return DateTime Returns the date fin amortissement.
     */
    public function getDateFinAmortissement() {
        return $this->dateFinAmortissement;
    }

    /**
     * Get the date fin service.
     *
     * @return DateTime Returns the date fin service.
     */
    public function getDateFinService() {
        return $this->dateFinService;
    }

    /**
     * Get the date mise en service.
     *
     * @return DateTime Returns the date mise en service.
     */
    public function getDateMiseEnService() {
        return $this->dateMiseEnService;
    }

    /**
     * Get the designation1.
     *
     * @return string Returns the designation1.
     */
    public function getDesignation1() {
        return $this->designation1;
    }

    /**
     * Get the designation2.
     *
     * @return string Returns the designation2.
     */
    public function getDesignation2() {
        return $this->designation2;
    }

    /**
     * Get the designation3.
     *
     * @return string Returns the designation3.
     */
    public function getDesignation3() {
        return $this->designation3;
    }

    /**
     * Get the designation4.
     *
     * @return string Returns the designation4.
     */
    public function getDesignation4() {
        return $this->designation4;
    }

    /**
     * Get the designation5.
     *
     * @return string Returns the designation5.
     */
    public function getDesignation5() {
        return $this->designation5;
    }

    /**
     * Get the montant amortissement.
     *
     * @return float Returns the montant amortissement.
     */
    public function getMontantAmortissement() {
        return $this->montantAmortissement;
    }

    /**
     * Get the numero serie.
     *
     * @return string Returns the numero serie.
     */
    public function getNumeroSerie() {
        return $this->numeroSerie;
    }

    /**
     * Get the val achat euro.
     *
     * @return float Returns the val achat euro.
     */
    public function getValAchatEuro() {
        return $this->valAchatEuro;
    }

    /**
     * Get the val achat f r f.
     *
     * @return float Returns the val achat f r f.
     */
    public function getValAchatFRF() {
        return $this->valAchatFRF;
    }

    /**
     * Set the code barre.
     *
     * @param string $codeBarre The code barre.
     * @return Materiel Returns this materiel.
     */
    public function setCodeBarre($codeBarre) {
        $this->codeBarre = $codeBarre;
        return $this;
    }

    /**
     * Set the code materiel.
     *
     * @param string $codeMateriel The code materiel.
     * @return Materiel Returns this materiel.
     */
    public function setCodeMateriel($codeMateriel) {
        $this->codeMateriel = $codeMateriel;
        return $this;
    }

    /**
     * Set the date achat.
     *
     * @param DateTime $dateAchat The date achat.
     * @return Materiel Returns this materiel.
     */
    public function setDateAchat(DateTime $dateAchat = null) {
        $this->dateAchat = $dateAchat;
        return $this;
    }

    /**
     * Set the date debut amortissement.
     *
     * @param DateTime $dateDebutAmortissement The date debut amortissement.
     * @return Materiel Returns this materiel.
     */
    public function setDateDebutAmortissement(DateTime $dateDebutAmortissement = null) {
        $this->dateDebutAmortissement = $dateDebutAmortissement;
        return $this;
    }

    /**
     * Set the date fin amortissement.
     *
     * @param DateTime $dateFinAmortissement The date fin amortissement.
     * @return Materiel Returns this materiel.
     */
    public function setDateFinAmortissement(DateTime $dateFinAmortissement = null) {
        $this->dateFinAmortissement = $dateFinAmortissement;
        return $this;
    }

    /**
     * Set the date fin service.
     *
     * @param DateTime $dateFinService The date fin service.
     * @return Materiel Returns this materiel.
     */
    public function setDateFinService(DateTime $dateFinService = null) {
        $this->dateFinService = $dateFinService;
        return $this;
    }

    /**
     * Set the date mise en service.
     *
     * @param DateTime $dateMiseEnService The date mise en service.
     * @return Materiel Returns this materiel.
     */
    public function setDateMiseEnService(DateTime $dateMiseEnService = null) {
        $this->dateMiseEnService = $dateMiseEnService;
        return $this;
    }

    /**
     * Set the designation1.
     *
     * @param string $designation1 The designation1.
     * @return Materiel Returns this materiel.
     */
    public function setDesignation1($designation1) {
        $this->designation1 = $designation1;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string $designation2 The designation2.
     * @return Materiel Returns this materiel.
     */
    public function setDesignation2($designation2) {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string $designation3 The designation3.
     * @return Materiel Returns this materiel.
     */
    public function setDesignation3($designation3) {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the designation4.
     *
     * @param string $designation4 The designation4.
     * @return Materiel Returns this materiel.
     */
    public function setDesignation4($designation4) {
        $this->designation4 = $designation4;
        return $this;
    }

    /**
     * Set the designation5.
     *
     * @param string $designation5 The designation5.
     * @return Materiel Returns this materiel.
     */
    public function setDesignation5($designation5) {
        $this->designation5 = $designation5;
        return $this;
    }

    /**
     * Set the montant amortissement.
     *
     * @param float $montantAmortissement The montant amortissement.
     * @return Materiel Returns this materiel.
     */
    public function setMontantAmortissement($montantAmortissement) {
        $this->montantAmortissement = $montantAmortissement;
        return $this;
    }

    /**
     * Set the numero serie.
     *
     * @param string $numeroSerie The numero serie.
     * @return Materiel Returns this materiel.
     */
    public function setNumeroSerie($numeroSerie) {
        $this->numeroSerie = $numeroSerie;
        return $this;
    }

    /**
     * Set the val achat euro.
     *
     * @param float $valAchatEuro The val achat euro.
     * @return Materiel Returns this materiel.
     */
    public function setValAchatEuro($valAchatEuro) {
        $this->valAchatEuro = $valAchatEuro;
        return $this;
    }

    /**
     * Set the val achat f r f.
     *
     * @param float $valAchatFRF The val achat f r f.
     * @return Materiel Returns this materiel.
     */
    public function setValAchatFRF($valAchatFRF) {
        $this->valAchatFRF = $valAchatFRF;
        return $this;
    }
}
