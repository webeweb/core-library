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
 * Milliemes ana trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMilliemesAnaTrait {

    /**
     * Milliemes ana.
     *
     * @var float
     */
    private $milliemesAna;

    /**
     * Get the milliemes ana.
     *
     * @return float Returns the milliemes ana.
     */
    public function getMilliemesAna() {
        return $this->milliemesAna;
    }

    /**
     * Set the milliemes ana.
     *
     * @param float $milliemesAna The milliemes ana.
     */
    public function setMilliemesAna($milliemesAna) {
        $this->milliemesAna = $milliemesAna;
        return $this;
    }
}
