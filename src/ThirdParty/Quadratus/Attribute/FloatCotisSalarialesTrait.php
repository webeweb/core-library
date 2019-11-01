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
 * Cotis salariales trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCotisSalarialesTrait {

    /**
     * Cotis salariales.
     *
     * @var float
     */
    private $cotisSalariales;

    /**
     * Get the cotis salariales.
     *
     * @return float Returns the cotis salariales.
     */
    public function getCotisSalariales() {
        return $this->cotisSalariales;
    }

    /**
     * Set the cotis salariales.
     *
     * @param float $cotisSalariales The cotis salariales.
     */
    public function setCotisSalariales($cotisSalariales) {
        $this->cotisSalariales = $cotisSalariales;
        return $this;
    }
}
