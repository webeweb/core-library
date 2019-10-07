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
 * Ecritures dec t v a model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresDecTVA {

    /**
     * Code tva.
     *
     * @var int
     */
    private $codeTva;

    /**
     * Date dec t v a.
     *
     * @var DateTime
     */
    private $dateDecTVA;

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
     * Montant h t.
     *
     * @var float
     */
    private $montantHT;

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
     * @var DateTime
     */
    private $periodeEcriture;

    /**
     * Type c d i.
     *
     * @var string
     */
    private $typeCDI;

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
     * Get the date dec t v a.
     *
     * @return DateTime Returns the date dec t v a.
     */
    public function getDateDecTVA() {
        return $this->dateDecTVA;
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
     * Get the montant h t.
     *
     * @return float Returns the montant h t.
     */
    public function getMontantHT() {
        return $this->montantHT;
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
     * @return DateTime Returns the periode ecriture.
     */
    public function getPeriodeEcriture() {
        return $this->periodeEcriture;
    }

    /**
     * Get the type c d i.
     *
     * @return string Returns the type c d i.
     */
    public function getTypeCDI() {
        return $this->typeCDI;
    }

    /**
     * Set the code tva.
     *
     * @param int $codeTva The code tva.
     * @return EcrituresDecTVA Returns this ecritures dec t v a.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the date dec t v a.
     *
     * @param DateTime $dateDecTVA The date dec t v a.
     * @return EcrituresDecTVA Returns this ecritures dec t v a.
     */
    public function setDateDecTVA(DateTime $dateDecTVA = null) {
        $this->dateDecTVA = $dateDecTVA;
        return $this;
    }

    /**
     * Set the jour ecriture.
     *
     * @param string $jourEcriture The jour ecriture.
     * @return EcrituresDecTVA Returns this ecritures dec t v a.
     */
    public function setJourEcriture($jourEcriture) {
        $this->jourEcriture = $jourEcriture;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return EcrituresDecTVA Returns this ecritures dec t v a.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant h t.
     *
     * @param float $montantHT The montant h t.
     * @return EcrituresDecTVA Returns this ecritures dec t v a.
     */
    public function setMontantHT($montantHT) {
        $this->montantHT = $montantHT;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     * @return EcrituresDecTVA Returns this ecritures dec t v a.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return EcrituresDecTVA Returns this ecritures dec t v a.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime $periodeEcriture The periode ecriture.
     * @return EcrituresDecTVA Returns this ecritures dec t v a.
     */
    public function setPeriodeEcriture(DateTime $periodeEcriture = null) {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }

    /**
     * Set the type c d i.
     *
     * @param string $typeCDI The type c d i.
     * @return EcrituresDecTVA Returns this ecritures dec t v a.
     */
    public function setTypeCDI($typeCDI) {
        $this->typeCDI = $typeCDI;
        return $this;
    }
}
