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
 * Charges patronales trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatChargesPatronalesTrait {

    /**
     * Charges patronales.
     *
     * @var float
     */
    private $chargesPatronales;

    /**
     * Get the charges patronales.
     *
     * @return float Returns the charges patronales.
     */
    public function getChargesPatronales() {
        return $this->chargesPatronales;
    }

    /**
     * Set the charges patronales.
     *
     * @param float $chargesPatronales The charges patronales.
     */
    public function setChargesPatronales($chargesPatronales) {
        $this->chargesPatronales = $chargesPatronales;
        return $this;
    }
}
