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
 * Rr pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRrPrisTrait {

    /**
     * Rr pris.
     *
     * @var float
     */
    private $rrPris;

    /**
     * Get the rr pris.
     *
     * @return float Returns the rr pris.
     */
    public function getRrPris() {
        return $this->rrPris;
    }

    /**
     * Set the rr pris.
     *
     * @param float $rrPris The rr pris.
     */
    public function setRrPris($rrPris) {
        $this->rrPris = $rrPris;
        return $this;
    }
}
