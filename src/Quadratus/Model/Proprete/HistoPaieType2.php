<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Histo paie type2 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class HistoPaieType2 {

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
     * Nb heures.
     *
     * @var float
     */
    private $nbHeures;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Taux majoration.
     *
     * @var float
     */
    private $tauxMajoration;

    /**
     * Type d n j f.
     *
     * @var string
     */
    private $typeDNJF;

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
     * Get the nb heures.
     *
     * @return float Returns the nb heures.
     */
    public function getNbHeures() {
        return $this->nbHeures;
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
     * Get the taux majoration.
     *
     * @return float Returns the taux majoration.
     */
    public function getTauxMajoration() {
        return $this->tauxMajoration;
    }

    /**
     * Get the type d n j f.
     *
     * @return string Returns the type d n j f.
     */
    public function getTypeDNJF() {
        return $this->typeDNJF;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return HistoPaieType2 Returns this histo paie type2.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code prime.
     *
     * @param string $codePrime The code prime.
     * @return HistoPaieType2 Returns this histo paie type2.
     */
    public function setCodePrime($codePrime) {
        $this->codePrime = $codePrime;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float $nbHeures The nb heures.
     * @return HistoPaieType2 Returns this histo paie type2.
     */
    public function setNbHeures($nbHeures) {
        $this->nbHeures = $nbHeures;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return HistoPaieType2 Returns this histo paie type2.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the taux majoration.
     *
     * @param float $tauxMajoration The taux majoration.
     * @return HistoPaieType2 Returns this histo paie type2.
     */
    public function setTauxMajoration($tauxMajoration) {
        $this->tauxMajoration = $tauxMajoration;
        return $this;
    }

    /**
     * Set the type d n j f.
     *
     * @param string $typeDNJF The type d n j f.
     * @return HistoPaieType2 Returns this histo paie type2.
     */
    public function setTypeDNJF($typeDNJF) {
        $this->typeDNJF = $typeDNJF;
        return $this;
    }

}
