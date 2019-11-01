<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Dont assurance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDontAssuranceTrait {

    /**
     * Dont assurance.
     *
     * @var float
     */
    private $dontAssurance;

    /**
     * Get the dont assurance.
     *
     * @return float Returns the dont assurance.
     */
    public function getDontAssurance() {
        return $this->dontAssurance;
    }

    /**
     * Set the dont assurance.
     *
     * @param float $dontAssurance The dont assurance.
     */
    public function setDontAssurance($dontAssurance) {
        $this->dontAssurance = $dontAssurance;
        return $this;
    }
}
