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
 * Cotis patronales trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCotisPatronalesTrait {

    /**
     * Cotis patronales.
     *
     * @var float
     */
    private $cotisPatronales;

    /**
     * Get the cotis patronales.
     *
     * @return float Returns the cotis patronales.
     */
    public function getCotisPatronales() {
        return $this->cotisPatronales;
    }

    /**
     * Set the cotis patronales.
     *
     * @param float $cotisPatronales The cotis patronales.
     */
    public function setCotisPatronales($cotisPatronales) {
        $this->cotisPatronales = $cotisPatronales;
        return $this;
    }
}
