<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Ecritures dec tva.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresDecTva {

    /**
     * Code tva.
     *
     * @var int
     */
    private $codeTva;

    /**
     * Date dec tva.
     *
     * @var DateTime|null
     */
    private $dateDecTva;

    /**
     * Jour ecriture.
     *
     * @var string
     */
    private $jourEcriture;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Montant ht.
     *
     * @var float
     */
    private $montantHt;

    /**
     * Num uniq.
     *
     * @var int
     */
    private $numUniq;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Periode ecriture.
     *
     * @var DateTime|null
     */
    private $periodeEcriture;

    /**
     * Type cdi.
     *
     * @var string
     */
    private $typeCdi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code tva.
     *
     * @return int Returns the code tva.
     */
    public function getCodeTva() {
        return $this->codeTva;
    }

    /**
     * Get the date dec tva.
     *
     * @return DateTime|null Returns the date dec tva.
     */
    public function getDateDecTva() {
        return $this->dateDecTva;
    }

    /**
     * Get the jour ecriture.
     *
     * @return string Returns the jour ecriture.
     */
    public function getJourEcriture() {
        return $this->jourEcriture;
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
     * Get the montant ht.
     *
     * @return float Returns the montant ht.
     */
    public function getMontantHt() {
        return $this->montantHt;
    }

    /**
     * Get the num uniq.
     *
     * @return int Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
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
     * Get the periode ecriture.
     *
     * @return DateTime|null Returns the periode ecriture.
     */
    public function getPeriodeEcriture() {
        return $this->periodeEcriture;
    }

    /**
     * Get the type cdi.
     *
     * @return string Returns the type cdi.
     */
    public function getTypeCdi() {
        return $this->typeCdi;
    }

    /**
     * Set the code tva.
     *
     * @param int $codeTva The code tva.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the date dec tva.
     *
     * @param DateTime|null $dateDecTva The date dec tva.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setDateDecTva(DateTime $dateDecTva = null) {
        $this->dateDecTva = $dateDecTva;
        return $this;
    }

    /**
     * Set the jour ecriture.
     *
     * @param string $jourEcriture The jour ecriture.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setJourEcriture($jourEcriture) {
        $this->jourEcriture = $jourEcriture;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant ht.
     *
     * @param float $montantHt The montant ht.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setMontantHt($montantHt) {
        $this->montantHt = $montantHt;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime|null $periodeEcriture The periode ecriture.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setPeriodeEcriture(DateTime $periodeEcriture = null) {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }

    /**
     * Set the type cdi.
     *
     * @param string $typeCdi The type cdi.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setTypeCdi($typeCdi) {
        $this->typeCdi = $typeCdi;
        return $this;
    }
}
