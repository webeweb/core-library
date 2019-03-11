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
 * Obligations model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Obligations {

    /**
     * Code famille.
     *
     * @var string
     */
    private $codeFamille;

    /**
     * Code obligation.
     *
     * @var string
     */
    private $codeObligation;

    /**
     * Frequence.
     *
     * @var string
     */
    private $frequence;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code famille.
     *
     * @return string Returns the code famille.
     */
    public function getCodeFamille() {
        return $this->codeFamille;
    }

    /**
     * Get the code obligation.
     *
     * @return string Returns the code obligation.
     */
    public function getCodeObligation() {
        return $this->codeObligation;
    }

    /**
     * Get the frequence.
     *
     * @return string Returns the frequence.
     */
    public function getFrequence() {
        return $this->frequence;
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
     * Set the code famille.
     *
     * @param string $codeFamille The code famille.
     * @return Obligations Returns this obligations.
     */
    public function setCodeFamille($codeFamille) {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code obligation.
     *
     * @param string $codeObligation The code obligation.
     * @return Obligations Returns this obligations.
     */
    public function setCodeObligation($codeObligation) {
        $this->codeObligation = $codeObligation;
        return $this;
    }

    /**
     * Set the frequence.
     *
     * @param string $frequence The frequence.
     * @return Obligations Returns this obligations.
     */
    public function setFrequence($frequence) {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Obligations Returns this obligations.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }
}
