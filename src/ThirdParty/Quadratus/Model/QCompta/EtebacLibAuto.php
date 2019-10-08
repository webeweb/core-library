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
 * Etebac lib auto model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class EtebacLibAuto {

    /**
     * Code etebac.
     *
     * @var string
     */
    private $codeEtebac;

    /**
     * Code lib auto.
     *
     * @var string
     */
    private $codeLibAuto;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code etebac.
     *
     * @return string Returns the code etebac.
     */
    public function getCodeEtebac() {
        return $this->codeEtebac;
    }

    /**
     * Get the code lib auto.
     *
     * @return string Returns the code lib auto.
     */
    public function getCodeLibAuto() {
        return $this->codeLibAuto;
    }

    /**
     * Set the code etebac.
     *
     * @param string $codeEtebac The code etebac.
     * @return EtebacLibAuto Returns this etebac lib auto.
     */
    public function setCodeEtebac($codeEtebac) {
        $this->codeEtebac = $codeEtebac;
        return $this;
    }

    /**
     * Set the code lib auto.
     *
     * @param string $codeLibAuto The code lib auto.
     * @return EtebacLibAuto Returns this etebac lib auto.
     */
    public function setCodeLibAuto($codeLibAuto) {
        $this->codeLibAuto = $codeLibAuto;
        return $this;
    }
}
