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
 * Histo paie h sup model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaieHSup {

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Nb h sup.
     *
     * @var float
     */
    private $nbHSup;

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
     * Get the nb h sup.
     *
     * @return float Returns the nb h sup.
     */
    public function getNbHSup() {
        return $this->nbHSup;
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
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return HistoPaieHSup Returns this histo paie h sup.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the nb h sup.
     *
     * @param float $nbHSup The nb h sup.
     * @return HistoPaieHSup Returns this histo paie h sup.
     */
    public function setNbHSup($nbHSup) {
        $this->nbHSup = $nbHSup;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return HistoPaieHSup Returns this histo paie h sup.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcent h sup.
     *
     * @param float $pourcentHSup The pourcent h sup.
     * @return HistoPaieHSup Returns this histo paie h sup.
     */
    public function setPourcentHSup($pourcentHSup) {
        $this->pourcentHSup = $pourcentHSup;
        return $this;
    }
}
