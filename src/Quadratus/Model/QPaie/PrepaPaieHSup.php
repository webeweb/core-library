<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Prepa paie h sup model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class PrepaPaieHSup {

    /**
     * Code lib h s.
     *
     * @var string
     */
    private $codeLibHS;

    /**
     * Nb h sup.
     *
     * @var float
     */
    private $nbHSup;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Pourcent h sup.
     *
     * @var float
     */
    private $pourcentHSup;

    /**
     * Semaine.
     *
     * @var string
     */
    private $semaine;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code lib h s.
     *
     * @return string Returns the code lib h s.
     */
    public function getCodeLibHS() {
        return $this->codeLibHS;
    }

    /**
     * Get the nb h sup.
     *
     * @return float Returns the nb h sup.
     */
    public function getNbHSup() {
        return $this->nbHSup;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
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
     * Get the pourcent h sup.
     *
     * @return float Returns the pourcent h sup.
     */
    public function getPourcentHSup() {
        return $this->pourcentHSup;
    }

    /**
     * Get the semaine.
     *
     * @return string Returns the semaine.
     */
    public function getSemaine() {
        return $this->semaine;
    }

    /**
     * Set the code lib h s.
     *
     * @param string $codeLibHS The code lib h s.
     * @return PrepaPaieHSup Returns this prepa paie h sup.
     */
    public function setCodeLibHS($codeLibHS) {
        $this->codeLibHS = $codeLibHS;
        return $this;
    }

    /**
     * Set the nb h sup.
     *
     * @param float $nbHSup The nb h sup.
     * @return PrepaPaieHSup Returns this prepa paie h sup.
     */
    public function setNbHSup($nbHSup) {
        $this->nbHSup = $nbHSup;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return PrepaPaieHSup Returns this prepa paie h sup.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return PrepaPaieHSup Returns this prepa paie h sup.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcent h sup.
     *
     * @param float $pourcentHSup The pourcent h sup.
     * @return PrepaPaieHSup Returns this prepa paie h sup.
     */
    public function setPourcentHSup($pourcentHSup) {
        $this->pourcentHSup = $pourcentHSup;
        return $this;
    }

    /**
     * Set the semaine.
     *
     * @param string $semaine The semaine.
     * @return PrepaPaieHSup Returns this prepa paie h sup.
     */
    public function setSemaine($semaine) {
        $this->semaine = $semaine;
        return $this;
    }

}
