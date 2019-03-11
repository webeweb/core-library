<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Stats perso suivi client cols model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class StatsPersoSuiviClientCols {

    /**
     * An n.
     *
     * @var string
     */
    private $anN;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Indice.
     *
     * @var int
     */
    private $indice;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Regle autres.
     *
     * @var string
     */
    private $regleAutres;

    /**
     * Regle b a r n.
     *
     * @var string
     */
    private $regleBARN;

    /**
     * Regle b a r s.
     *
     * @var string
     */
    private $regleBARS;

    /**
     * Regle b i c r n.
     *
     * @var string
     */
    private $regleBICRN;

    /**
     * Regle b i c r s.
     *
     * @var string
     */
    private $regleBICRS;

    /**
     * Regle b n c.
     *
     * @var string
     */
    private $regleBNC;

    /**
     * Regle s c i.
     *
     * @var string
     */
    private $regleSCI;

    /**
     * Regle s c m.
     *
     * @var string
     */
    private $regleSCM;

    /**
     * Regle tous.
     *
     * @var string
     */
    private $regleTous;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the an n.
     *
     * @return string Returns the an n.
     */
    public function getAnN() {
        return $this->anN;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the indice.
     *
     * @return int Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the regle autres.
     *
     * @return string Returns the regle autres.
     */
    public function getRegleAutres() {
        return $this->regleAutres;
    }

    /**
     * Get the regle b a r n.
     *
     * @return string Returns the regle b a r n.
     */
    public function getRegleBARN() {
        return $this->regleBARN;
    }

    /**
     * Get the regle b a r s.
     *
     * @return string Returns the regle b a r s.
     */
    public function getRegleBARS() {
        return $this->regleBARS;
    }

    /**
     * Get the regle b i c r n.
     *
     * @return string Returns the regle b i c r n.
     */
    public function getRegleBICRN() {
        return $this->regleBICRN;
    }

    /**
     * Get the regle b i c r s.
     *
     * @return string Returns the regle b i c r s.
     */
    public function getRegleBICRS() {
        return $this->regleBICRS;
    }

    /**
     * Get the regle b n c.
     *
     * @return string Returns the regle b n c.
     */
    public function getRegleBNC() {
        return $this->regleBNC;
    }

    /**
     * Get the regle s c i.
     *
     * @return string Returns the regle s c i.
     */
    public function getRegleSCI() {
        return $this->regleSCI;
    }

    /**
     * Get the regle s c m.
     *
     * @return string Returns the regle s c m.
     */
    public function getRegleSCM() {
        return $this->regleSCM;
    }

    /**
     * Get the regle tous.
     *
     * @return string Returns the regle tous.
     */
    public function getRegleTous() {
        return $this->regleTous;
    }

    /**
     * Set the an n.
     *
     * @param string $anN The an n.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setAnN($anN) {
        $this->anN = $anN;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int $indice The indice.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the regle autres.
     *
     * @param string $regleAutres The regle autres.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setRegleAutres($regleAutres) {
        $this->regleAutres = $regleAutres;
        return $this;
    }

    /**
     * Set the regle b a r n.
     *
     * @param string $regleBARN The regle b a r n.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setRegleBARN($regleBARN) {
        $this->regleBARN = $regleBARN;
        return $this;
    }

    /**
     * Set the regle b a r s.
     *
     * @param string $regleBARS The regle b a r s.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setRegleBARS($regleBARS) {
        $this->regleBARS = $regleBARS;
        return $this;
    }

    /**
     * Set the regle b i c r n.
     *
     * @param string $regleBICRN The regle b i c r n.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setRegleBICRN($regleBICRN) {
        $this->regleBICRN = $regleBICRN;
        return $this;
    }

    /**
     * Set the regle b i c r s.
     *
     * @param string $regleBICRS The regle b i c r s.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setRegleBICRS($regleBICRS) {
        $this->regleBICRS = $regleBICRS;
        return $this;
    }

    /**
     * Set the regle b n c.
     *
     * @param string $regleBNC The regle b n c.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setRegleBNC($regleBNC) {
        $this->regleBNC = $regleBNC;
        return $this;
    }

    /**
     * Set the regle s c i.
     *
     * @param string $regleSCI The regle s c i.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setRegleSCI($regleSCI) {
        $this->regleSCI = $regleSCI;
        return $this;
    }

    /**
     * Set the regle s c m.
     *
     * @param string $regleSCM The regle s c m.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setRegleSCM($regleSCM) {
        $this->regleSCM = $regleSCM;
        return $this;
    }

    /**
     * Set the regle tous.
     *
     * @param string $regleTous The regle tous.
     * @return StatsPersoSuiviClientCols Returns this stats perso suivi client cols.
     */
    public function setRegleTous($regleTous) {
        $this->regleTous = $regleTous;
        return $this;
    }
}
