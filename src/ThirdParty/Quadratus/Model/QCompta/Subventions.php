<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Subventions model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Subventions {

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Coeff degressif.
     *
     * @var float
     */
    private $coeffDegressif;

    /**
     * Date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * Date cession.
     *
     * @var DateTime
     */
    private $dateCession;

    /**
     * Date mise en service.
     *
     * @var DateTime
     */
    private $dateMiseEnService;

    /**
     * Duree.
     *
     * @var int
     */
    private $duree;

    /**
     * Immo numero.
     *
     * @var int
     */
    private $immoNumero;

    /**
     * Immo numero compte.
     *
     * @var string
     */
    private $immoNumeroCompte;

    /**
     * Immo numero deux.
     *
     * @var int
     */
    private $immoNumeroDeux;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Num contrat.
     *
     * @var string
     */
    private $numContrat;

    /**
     * Num cpt subvention.
     *
     * @var string
     */
    private $numCptSubvention;

    /**
     * Numero p j.
     *
     * @var int
     */
    private $numeroPJ;

    /**
     * Taux lineaire.
     *
     * @var float
     */
    private $tauxLineaire;

    /**
     * Type amort.
     *
     * @var string
     */
    private $typeAmort;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the coeff degressif.
     *
     * @return float Returns the coeff degressif.
     */
    public function getCoeffDegressif() {
        return $this->coeffDegressif;
    }

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the date cession.
     *
     * @return DateTime Returns the date cession.
     */
    public function getDateCession() {
        return $this->dateCession;
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
     * Get the duree.
     *
     * @return int Returns the duree.
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Get the immo numero.
     *
     * @return int Returns the immo numero.
     */
    public function getImmoNumero() {
        return $this->immoNumero;
    }

    /**
     * Get the immo numero compte.
     *
     * @return string Returns the immo numero compte.
     */
    public function getImmoNumeroCompte() {
        return $this->immoNumeroCompte;
    }

    /**
     * Get the immo numero deux.
     *
     * @return int Returns the immo numero deux.
     */
    public function getImmoNumeroDeux() {
        return $this->immoNumeroDeux;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
    }

    /**
     * Get the num contrat.
     *
     * @return string Returns the num contrat.
     */
    public function getNumContrat() {
        return $this->numContrat;
    }

    /**
     * Get the num cpt subvention.
     *
     * @return string Returns the num cpt subvention.
     */
    public function getNumCptSubvention() {
        return $this->numCptSubvention;
    }

    /**
     * Get the numero p j.
     *
     * @return int Returns the numero p j.
     */
    public function getNumeroPJ() {
        return $this->numeroPJ;
    }

    /**
     * Get the taux lineaire.
     *
     * @return float Returns the taux lineaire.
     */
    public function getTauxLineaire() {
        return $this->tauxLineaire;
    }

    /**
     * Get the type amort.
     *
     * @return string Returns the type amort.
     */
    public function getTypeAmort() {
        return $this->typeAmort;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return Subventions Returns this subventions.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the coeff degressif.
     *
     * @param float $coeffDegressif The coeff degressif.
     * @return Subventions Returns this subventions.
     */
    public function setCoeffDegressif($coeffDegressif) {
        $this->coeffDegressif = $coeffDegressif;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime $date The date.
     * @return Subventions Returns this subventions.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the date cession.
     *
     * @param DateTime $dateCession The date cession.
     * @return Subventions Returns this subventions.
     */
    public function setDateCession(DateTime $dateCession = null) {
        $this->dateCession = $dateCession;
        return $this;
    }

    /**
     * Set the date mise en service.
     *
     * @param DateTime $dateMiseEnService The date mise en service.
     * @return Subventions Returns this subventions.
     */
    public function setDateMiseEnService(DateTime $dateMiseEnService = null) {
        $this->dateMiseEnService = $dateMiseEnService;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int $duree The duree.
     * @return Subventions Returns this subventions.
     */
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the immo numero.
     *
     * @param int $immoNumero The immo numero.
     * @return Subventions Returns this subventions.
     */
    public function setImmoNumero($immoNumero) {
        $this->immoNumero = $immoNumero;
        return $this;
    }

    /**
     * Set the immo numero compte.
     *
     * @param string $immoNumeroCompte The immo numero compte.
     * @return Subventions Returns this subventions.
     */
    public function setImmoNumeroCompte($immoNumeroCompte) {
        $this->immoNumeroCompte = $immoNumeroCompte;
        return $this;
    }

    /**
     * Set the immo numero deux.
     *
     * @param int $immoNumeroDeux The immo numero deux.
     * @return Subventions Returns this subventions.
     */
    public function setImmoNumeroDeux($immoNumeroDeux) {
        $this->immoNumeroDeux = $immoNumeroDeux;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Subventions Returns this subventions.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return Subventions Returns this subventions.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string $numContrat The num contrat.
     * @return Subventions Returns this subventions.
     */
    public function setNumContrat($numContrat) {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the num cpt subvention.
     *
     * @param string $numCptSubvention The num cpt subvention.
     * @return Subventions Returns this subventions.
     */
    public function setNumCptSubvention($numCptSubvention) {
        $this->numCptSubvention = $numCptSubvention;
        return $this;
    }

    /**
     * Set the numero p j.
     *
     * @param int $numeroPJ The numero p j.
     * @return Subventions Returns this subventions.
     */
    public function setNumeroPJ($numeroPJ) {
        $this->numeroPJ = $numeroPJ;
        return $this;
    }

    /**
     * Set the taux lineaire.
     *
     * @param float $tauxLineaire The taux lineaire.
     * @return Subventions Returns this subventions.
     */
    public function setTauxLineaire($tauxLineaire) {
        $this->tauxLineaire = $tauxLineaire;
        return $this;
    }

    /**
     * Set the type amort.
     *
     * @param string $typeAmort The type amort.
     * @return Subventions Returns this subventions.
     */
    public function setTypeAmort($typeAmort) {
        $this->typeAmort = $typeAmort;
        return $this;
    }
}
