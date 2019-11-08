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
 * Histo paie primes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaiePrimes {

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Code prime.
     *
     * @var string
     */
    private $codePrime;

    /**
     * Nombre prime.
     *
     * @var float
     */
    private $nombrePrime;

    /**
     * Numero prime.
     *
     * @var int
     */
    private $numeroPrime;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Periode rappel.
     *
     * @var DateTime|null
     */
    private $periodeRappel;

    /**
     * Taux prime.
     *
     * @var float
     */
    private $tauxPrime;

    /**
     * Type prime.
     *
     * @var string
     */
    private $typePrime;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the code prime.
     *
     * @return string Returns the code prime.
     */
    public function getCodePrime() {
        return $this->codePrime;
    }

    /**
     * Get the nombre prime.
     *
     * @return float Returns the nombre prime.
     */
    public function getNombrePrime() {
        return $this->nombrePrime;
    }

    /**
     * Get the numero prime.
     *
     * @return int Returns the numero prime.
     */
    public function getNumeroPrime() {
        return $this->numeroPrime;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the periode rappel.
     *
     * @return DateTime|null Returns the periode rappel.
     */
    public function getPeriodeRappel() {
        return $this->periodeRappel;
    }

    /**
     * Get the taux prime.
     *
     * @return float Returns the taux prime.
     */
    public function getTauxPrime() {
        return $this->tauxPrime;
    }

    /**
     * Get the type prime.
     *
     * @return string Returns the type prime.
     */
    public function getTypePrime() {
        return $this->typePrime;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code prime.
     *
     * @param string $codePrime The code prime.
     */
    public function setCodePrime($codePrime) {
        $this->codePrime = $codePrime;
        return $this;
    }

    /**
     * Set the nombre prime.
     *
     * @param float $nombrePrime The nombre prime.
     */
    public function setNombrePrime($nombrePrime) {
        $this->nombrePrime = $nombrePrime;
        return $this;
    }

    /**
     * Set the numero prime.
     *
     * @param int $numeroPrime The numero prime.
     */
    public function setNumeroPrime($numeroPrime) {
        $this->numeroPrime = $numeroPrime;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the periode rappel.
     *
     * @param DateTime|null $periodeRappel The periode rappel.
     */
    public function setPeriodeRappel(DateTime $periodeRappel = null) {
        $this->periodeRappel = $periodeRappel;
        return $this;
    }

    /**
     * Set the taux prime.
     *
     * @param float $tauxPrime The taux prime.
     */
    public function setTauxPrime($tauxPrime) {
        $this->tauxPrime = $tauxPrime;
        return $this;
    }

    /**
     * Set the type prime.
     *
     * @param string $typePrime The type prime.
     */
    public function setTypePrime($typePrime) {
        $this->typePrime = $typePrime;
        return $this;
    }
}
