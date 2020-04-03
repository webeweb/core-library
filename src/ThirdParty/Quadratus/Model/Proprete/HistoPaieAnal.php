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
 * Histo paie anal.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaieAnal {

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Code nature.
     *
     * @var string
     */
    private $codeNature;

    /**
     * Numero ligne anal.
     *
     * @var int
     */
    private $numeroLigneAnal;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Pourcent.
     *
     * @var float
     */
    private $pourcent;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
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
     * Get the code nature.
     *
     * @return string Returns the code nature.
     */
    public function getCodeNature() {
        return $this->codeNature;
    }

    /**
     * Get the numero ligne anal.
     *
     * @return int Returns the numero ligne anal.
     */
    public function getNumeroLigneAnal() {
        return $this->numeroLigneAnal;
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
     * Get the pourcent.
     *
     * @return float Returns the pourcent.
     */
    public function getPourcent() {
        return $this->pourcent;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the numero ligne anal.
     *
     * @param int $numeroLigneAnal The numero ligne anal.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setNumeroLigneAnal($numeroLigneAnal) {
        $this->numeroLigneAnal = $numeroLigneAnal;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcent.
     *
     * @param float $pourcent The pourcent.
     * @return HistoPaieAnal Returns this Histo paie anal.
     */
    public function setPourcent($pourcent) {
        $this->pourcent = $pourcent;
        return $this;
    }
}
