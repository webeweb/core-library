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
 * Tableaux paiements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class TableauxPaiements {

    /**
     * Assurance.
     *
     * @var float
     */
    private $assurance;

    /**
     * Code tva.
     *
     * @var string
     */
    private $codeTva;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Entretien.
     *
     * @var float
     */
    private $entretien;

    /**
     * Loyer ht.
     *
     * @var float
     */
    private $loyerHt;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Numero cb.
     *
     * @var int
     */
    private $numeroCb;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Numero deux cb.
     *
     * @var int
     */
    private $numeroDeuxCb;

    /**
     * Valeur rachat.
     *
     * @var float
     */
    private $valeurRachat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the assurance.
     *
     * @return float Returns the assurance.
     */
    public function getAssurance() {
        return $this->assurance;
    }

    /**
     * Get the code tva.
     *
     * @return string Returns the code tva.
     */
    public function getCodeTva() {
        return $this->codeTva;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the entretien.
     *
     * @return float Returns the entretien.
     */
    public function getEntretien() {
        return $this->entretien;
    }

    /**
     * Get the loyer ht.
     *
     * @return float Returns the loyer ht.
     */
    public function getLoyerHt() {
        return $this->loyerHt;
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
     * Get the numero cb.
     *
     * @return int Returns the numero cb.
     */
    public function getNumeroCb() {
        return $this->numeroCb;
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
     * Get the numero deux cb.
     *
     * @return int Returns the numero deux cb.
     */
    public function getNumeroDeuxCb() {
        return $this->numeroDeuxCb;
    }

    /**
     * Get the valeur rachat.
     *
     * @return float Returns the valeur rachat.
     */
    public function getValeurRachat() {
        return $this->valeurRachat;
    }

    /**
     * Set the assurance.
     *
     * @param float $assurance The assurance.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setAssurance($assurance) {
        $this->assurance = $assurance;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string $codeTva The code tva.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the entretien.
     *
     * @param float $entretien The entretien.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setEntretien($entretien) {
        $this->entretien = $entretien;
        return $this;
    }

    /**
     * Set the loyer ht.
     *
     * @param float $loyerHt The loyer ht.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setLoyerHt($loyerHt) {
        $this->loyerHt = $loyerHt;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero cb.
     *
     * @param int $numeroCb The numero cb.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setNumeroCb($numeroCb) {
        $this->numeroCb = $numeroCb;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero deux cb.
     *
     * @param int $numeroDeuxCb The numero deux cb.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setNumeroDeuxCb($numeroDeuxCb) {
        $this->numeroDeuxCb = $numeroDeuxCb;
        return $this;
    }

    /**
     * Set the valeur rachat.
     *
     * @param float $valeurRachat The valeur rachat.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setValeurRachat($valeurRachat) {
        $this->valeurRachat = $valeurRachat;
        return $this;
    }
}
