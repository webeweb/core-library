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


/**
 * Transfert immos model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class TransfertImmos {

    /**
     * Cpt der cap.
     *
     * @var string
     */
    private $cptDerCap;

    /**
     * Cpt der dot.
     *
     * @var string
     */
    private $cptDerDot;

    /**
     * Cpt der maj.
     *
     * @var string
     */
    private $cptDerMaj;

    /**
     * Cpt der rep.
     *
     * @var string
     */
    private $cptDerRep;

    /**
     * Cpt dot cor.
     *
     * @var string
     */
    private $cptDotCor;

    /**
     * Cpt dot exc.
     *
     * @var string
     */
    private $cptDotExc;

    /**
     * Cpt dot fin.
     *
     * @var string
     */
    private $cptDotFin;

    /**
     * Cpt dot inc.
     *
     * @var string
     */
    private $cptDotInc;

    /**
     * Cpt val cor.
     *
     * @var string
     */
    private $cptValCor;

    /**
     * Cpt val exc.
     *
     * @var string
     */
    private $cptValExc;

    /**
     * Cpt val fin.
     *
     * @var string
     */
    private $cptValFin;

    /**
     * Cpt val inc.
     *
     * @var string
     */
    private $cptValInc;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the cpt der cap.
     *
     * @return string Returns the cpt der cap.
     */
    public function getCptDerCap() {
        return $this->cptDerCap;
    }

    /**
     * Get the cpt der dot.
     *
     * @return string Returns the cpt der dot.
     */
    public function getCptDerDot() {
        return $this->cptDerDot;
    }

    /**
     * Get the cpt der maj.
     *
     * @return string Returns the cpt der maj.
     */
    public function getCptDerMaj() {
        return $this->cptDerMaj;
    }

    /**
     * Get the cpt der rep.
     *
     * @return string Returns the cpt der rep.
     */
    public function getCptDerRep() {
        return $this->cptDerRep;
    }

    /**
     * Get the cpt dot cor.
     *
     * @return string Returns the cpt dot cor.
     */
    public function getCptDotCor() {
        return $this->cptDotCor;
    }

    /**
     * Get the cpt dot exc.
     *
     * @return string Returns the cpt dot exc.
     */
    public function getCptDotExc() {
        return $this->cptDotExc;
    }

    /**
     * Get the cpt dot fin.
     *
     * @return string Returns the cpt dot fin.
     */
    public function getCptDotFin() {
        return $this->cptDotFin;
    }

    /**
     * Get the cpt dot inc.
     *
     * @return string Returns the cpt dot inc.
     */
    public function getCptDotInc() {
        return $this->cptDotInc;
    }

    /**
     * Get the cpt val cor.
     *
     * @return string Returns the cpt val cor.
     */
    public function getCptValCor() {
        return $this->cptValCor;
    }

    /**
     * Get the cpt val exc.
     *
     * @return string Returns the cpt val exc.
     */
    public function getCptValExc() {
        return $this->cptValExc;
    }

    /**
     * Get the cpt val fin.
     *
     * @return string Returns the cpt val fin.
     */
    public function getCptValFin() {
        return $this->cptValFin;
    }

    /**
     * Get the cpt val inc.
     *
     * @return string Returns the cpt val inc.
     */
    public function getCptValInc() {
        return $this->cptValInc;
    }

    /**
     * Set the cpt der cap.
     *
     * @param string $cptDerCap The cpt der cap.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptDerCap($cptDerCap) {
        $this->cptDerCap = $cptDerCap;
        return $this;
    }

    /**
     * Set the cpt der dot.
     *
     * @param string $cptDerDot The cpt der dot.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptDerDot($cptDerDot) {
        $this->cptDerDot = $cptDerDot;
        return $this;
    }

    /**
     * Set the cpt der maj.
     *
     * @param string $cptDerMaj The cpt der maj.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptDerMaj($cptDerMaj) {
        $this->cptDerMaj = $cptDerMaj;
        return $this;
    }

    /**
     * Set the cpt der rep.
     *
     * @param string $cptDerRep The cpt der rep.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptDerRep($cptDerRep) {
        $this->cptDerRep = $cptDerRep;
        return $this;
    }

    /**
     * Set the cpt dot cor.
     *
     * @param string $cptDotCor The cpt dot cor.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptDotCor($cptDotCor) {
        $this->cptDotCor = $cptDotCor;
        return $this;
    }

    /**
     * Set the cpt dot exc.
     *
     * @param string $cptDotExc The cpt dot exc.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptDotExc($cptDotExc) {
        $this->cptDotExc = $cptDotExc;
        return $this;
    }

    /**
     * Set the cpt dot fin.
     *
     * @param string $cptDotFin The cpt dot fin.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptDotFin($cptDotFin) {
        $this->cptDotFin = $cptDotFin;
        return $this;
    }

    /**
     * Set the cpt dot inc.
     *
     * @param string $cptDotInc The cpt dot inc.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptDotInc($cptDotInc) {
        $this->cptDotInc = $cptDotInc;
        return $this;
    }

    /**
     * Set the cpt val cor.
     *
     * @param string $cptValCor The cpt val cor.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptValCor($cptValCor) {
        $this->cptValCor = $cptValCor;
        return $this;
    }

    /**
     * Set the cpt val exc.
     *
     * @param string $cptValExc The cpt val exc.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptValExc($cptValExc) {
        $this->cptValExc = $cptValExc;
        return $this;
    }

    /**
     * Set the cpt val fin.
     *
     * @param string $cptValFin The cpt val fin.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptValFin($cptValFin) {
        $this->cptValFin = $cptValFin;
        return $this;
    }

    /**
     * Set the cpt val inc.
     *
     * @param string $cptValInc The cpt val inc.
     * @return TransfertImmos Returns this transfert immos.
     */
    public function setCptValInc($cptValInc) {
        $this->cptValInc = $cptValInc;
        return $this;
    }
}
