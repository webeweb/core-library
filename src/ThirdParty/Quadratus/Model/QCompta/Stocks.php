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
 * Stocks model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Stocks {

    /**
     * Annee.
     *
     * @var string
     */
    private $annee;

    /**
     * Centre.
     *
     * @var string
     */
    private $centre;

    /**
     * Libelle ecriture.
     *
     * @var string
     */
    private $libelleEcriture;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Nature.
     *
     * @var string
     */
    private $nature;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Prix u.
     *
     * @var float
     */
    private $prixU;

    /**
     * Prix u2.
     *
     * @var float
     */
    private $prixU2;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Quantite2.
     *
     * @var float
     */
    private $quantite2;

    /**
     * Ref ecr code journal.
     *
     * @var string
     */
    private $refEcrCodeJournal;

    /**
     * Ref ecr folio.
     *
     * @var int
     */
    private $refEcrFolio;

    /**
     * Ref ecr ligne folio.
     *
     * @var int
     */
    private $refEcrLigneFolio;

    /**
     * Ref ecr num ligne.
     *
     * @var int
     */
    private $refEcrNumLigne;

    /**
     * Ref ecr periode ecriture.
     *
     * @var DateTime
     */
    private $refEcrPeriodeEcriture;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the annee.
     *
     * @return string Returns the annee.
     */
    public function getAnnee() {
        return $this->annee;
    }

    /**
     * Get the centre.
     *
     * @return string Returns the centre.
     */
    public function getCentre() {
        return $this->centre;
    }

    /**
     * Get the libelle ecriture.
     *
     * @return string Returns the libelle ecriture.
     */
    public function getLibelleEcriture() {
        return $this->libelleEcriture;
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
     * Get the nature.
     *
     * @return string Returns the nature.
     */
    public function getNature() {
        return $this->nature;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the prix u.
     *
     * @return float Returns the prix u.
     */
    public function getPrixU() {
        return $this->prixU;
    }

    /**
     * Get the prix u2.
     *
     * @return float Returns the prix u2.
     */
    public function getPrixU2() {
        return $this->prixU2;
    }

    /**
     * Get the quantite.
     *
     * @return float Returns the quantite.
     */
    public function getQuantite() {
        return $this->quantite;
    }

    /**
     * Get the quantite2.
     *
     * @return float Returns the quantite2.
     */
    public function getQuantite2() {
        return $this->quantite2;
    }

    /**
     * Get the ref ecr code journal.
     *
     * @return string Returns the ref ecr code journal.
     */
    public function getRefEcrCodeJournal() {
        return $this->refEcrCodeJournal;
    }

    /**
     * Get the ref ecr folio.
     *
     * @return int Returns the ref ecr folio.
     */
    public function getRefEcrFolio() {
        return $this->refEcrFolio;
    }

    /**
     * Get the ref ecr ligne folio.
     *
     * @return int Returns the ref ecr ligne folio.
     */
    public function getRefEcrLigneFolio() {
        return $this->refEcrLigneFolio;
    }

    /**
     * Get the ref ecr num ligne.
     *
     * @return int Returns the ref ecr num ligne.
     */
    public function getRefEcrNumLigne() {
        return $this->refEcrNumLigne;
    }

    /**
     * Get the ref ecr periode ecriture.
     *
     * @return DateTime Returns the ref ecr periode ecriture.
     */
    public function getRefEcrPeriodeEcriture() {
        return $this->refEcrPeriodeEcriture;
    }

    /**
     * Set the annee.
     *
     * @param string $annee The annee.
     * @return Stocks Returns this stocks.
     */
    public function setAnnee($annee) {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the centre.
     *
     * @param string $centre The centre.
     * @return Stocks Returns this stocks.
     */
    public function setCentre($centre) {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the libelle ecriture.
     *
     * @param string $libelleEcriture The libelle ecriture.
     * @return Stocks Returns this stocks.
     */
    public function setLibelleEcriture($libelleEcriture) {
        $this->libelleEcriture = $libelleEcriture;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return Stocks Returns this stocks.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     * @return Stocks Returns this stocks.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return Stocks Returns this stocks.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return Stocks Returns this stocks.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return Stocks Returns this stocks.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the prix u.
     *
     * @param float $prixU The prix u.
     * @return Stocks Returns this stocks.
     */
    public function setPrixU($prixU) {
        $this->prixU = $prixU;
        return $this;
    }

    /**
     * Set the prix u2.
     *
     * @param float $prixU2 The prix u2.
     * @return Stocks Returns this stocks.
     */
    public function setPrixU2($prixU2) {
        $this->prixU2 = $prixU2;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return Stocks Returns this stocks.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the quantite2.
     *
     * @param float $quantite2 The quantite2.
     * @return Stocks Returns this stocks.
     */
    public function setQuantite2($quantite2) {
        $this->quantite2 = $quantite2;
        return $this;
    }

    /**
     * Set the ref ecr code journal.
     *
     * @param string $refEcrCodeJournal The ref ecr code journal.
     * @return Stocks Returns this stocks.
     */
    public function setRefEcrCodeJournal($refEcrCodeJournal) {
        $this->refEcrCodeJournal = $refEcrCodeJournal;
        return $this;
    }

    /**
     * Set the ref ecr folio.
     *
     * @param int $refEcrFolio The ref ecr folio.
     * @return Stocks Returns this stocks.
     */
    public function setRefEcrFolio($refEcrFolio) {
        $this->refEcrFolio = $refEcrFolio;
        return $this;
    }

    /**
     * Set the ref ecr ligne folio.
     *
     * @param int $refEcrLigneFolio The ref ecr ligne folio.
     * @return Stocks Returns this stocks.
     */
    public function setRefEcrLigneFolio($refEcrLigneFolio) {
        $this->refEcrLigneFolio = $refEcrLigneFolio;
        return $this;
    }

    /**
     * Set the ref ecr num ligne.
     *
     * @param int $refEcrNumLigne The ref ecr num ligne.
     * @return Stocks Returns this stocks.
     */
    public function setRefEcrNumLigne($refEcrNumLigne) {
        $this->refEcrNumLigne = $refEcrNumLigne;
        return $this;
    }

    /**
     * Set the ref ecr periode ecriture.
     *
     * @param DateTime $refEcrPeriodeEcriture The ref ecr periode ecriture.
     * @return Stocks Returns this stocks.
     */
    public function setRefEcrPeriodeEcriture(DateTime $refEcrPeriodeEcriture = null) {
        $this->refEcrPeriodeEcriture = $refEcrPeriodeEcriture;
        return $this;
    }
}
