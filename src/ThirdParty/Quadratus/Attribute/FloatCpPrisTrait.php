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
 * Cp pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCpPrisTrait {

    /**
     * Cp pris.
     *
     * @var float
     */
    private $cpPris;

    /**
     * Get the cp pris.
     *
     * @return float Returns the cp pris.
     */
    public function getCpPris() {
        return $this->cpPris;
    }

    /**
     * Set the cp pris.
     *
     * @param float $cpPris The cp pris.
     */
    public function setCpPris($cpPris) {
        $this->cpPris = $cpPris;
        return $this;
    }
}
