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
 * Locations fi t p model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class LocationsFiTP {

    /**
     * Assurance.
     *
     * @var float
     */
    private $assurance;

    /**
     * Code t v a.
     *
     * @var string
     */
    private $codeTVA;

    /**
     * Date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * Entretien.
     *
     * @var float
     */
    private $entretien;

    /**
     * Loyer h t.
     *
     * @var float
     */
    private $loyerHT;

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
     * Get the code t v a.
     *
     * @return string Returns the code t v a.
     */
    public function getCodeTVA() {
        return $this->codeTVA;
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
     * Get the entretien.
     *
     * @return float Returns the entretien.
     */
    public function getEntretien() {
        return $this->entretien;
    }

    /**
     * Get the loyer h t.
     *
     * @return float Returns the loyer h t.
     */
    public function getLoyerHT() {
        return $this->loyerHT;
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
     * @return LocationsFiTP Returns this locations fi t p.
     */
    public function setAssurance($assurance) {
        $this->assurance = $assurance;
        return $this;
    }

    /**
     * Set the code t v a.
     *
     * @param string $codeTVA The code t v a.
     * @return LocationsFiTP Returns this locations fi t p.
     */
    public function setCodeTVA($codeTVA) {
        $this->codeTVA = $codeTVA;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime $date The date.
     * @return LocationsFiTP Returns this locations fi t p.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the entretien.
     *
     * @param float $entretien The entretien.
     * @return LocationsFiTP Returns this locations fi t p.
     */
    public function setEntretien($entretien) {
        $this->entretien = $entretien;
        return $this;
    }

    /**
     * Set the loyer h t.
     *
     * @param float $loyerHT The loyer h t.
     * @return LocationsFiTP Returns this locations fi t p.
     */
    public function setLoyerHT($loyerHT) {
        $this->loyerHT = $loyerHT;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return LocationsFiTP Returns this locations fi t p.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return LocationsFiTP Returns this locations fi t p.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return LocationsFiTP Returns this locations fi t p.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }
}
