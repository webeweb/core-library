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

/**
 * Reglements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Reglements {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Intitule2.
     *
     * @var string
     */
    private $intitule2;

    /**
     * Intitule3.
     *
     * @var string
     */
    private $intitule3;

    /**
     * Type acceptation.
     *
     * @var string
     */
    private $typeAcceptation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the intitule2.
     *
     * @return string Returns the intitule2.
     */
    public function getIntitule2() {
        return $this->intitule2;
    }

    /**
     * Get the intitule3.
     *
     * @return string Returns the intitule3.
     */
    public function getIntitule3() {
        return $this->intitule3;
    }

    /**
     * Get the type acceptation.
     *
     * @return string Returns the type acceptation.
     */
    public function getTypeAcceptation() {
        return $this->typeAcceptation;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string $intitule2 The intitule2.
     */
    public function setIntitule2($intitule2) {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the intitule3.
     *
     * @param string $intitule3 The intitule3.
     */
    public function setIntitule3($intitule3) {
        $this->intitule3 = $intitule3;
        return $this;
    }

    /**
     * Set the type acceptation.
     *
     * @param string $typeAcceptation The type acceptation.
     */
    public function setTypeAcceptation($typeAcceptation) {
        $this->typeAcceptation = $typeAcceptation;
        return $this;
    }
}
