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
 * Locations fi tp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class LocationsFiTp {

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
     * Numero.
     *
     * @var int
     */
    private $numero;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

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
     * Get the numero.
     *
     * @return int Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
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
     * Set the assurance.
     *
     * @param float $assurance The assurance.
     */
    public function setAssurance($assurance) {
        $this->assurance = $assurance;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string $codeTva The code tva.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the entretien.
     *
     * @param float $entretien The entretien.
     */
    public function setEntretien($entretien) {
        $this->entretien = $entretien;
        return $this;
    }

    /**
     * Set the loyer ht.
     *
     * @param float $loyerHt The loyer ht.
     */
    public function setLoyerHt($loyerHt) {
        $this->loyerHt = $loyerHt;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }
}
