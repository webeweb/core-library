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
 * Tds90 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds90Trait {

    /**
     * Tds90.
     *
     * @var float
     */
    private $tds90;

    /**
     * Get the tds90.
     *
     * @return float Returns the tds90.
     */
    public function getTds90() {
        return $this->tds90;
    }

    /**
     * Set the tds90.
     *
     * @param float $tds90 The tds90.
     */
    public function setTds90($tds90) {
        $this->tds90 = $tds90;
        return $this;
    }
}
