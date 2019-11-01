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
 * Tds132 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds132Trait {

    /**
     * Tds132.
     *
     * @var float
     */
    private $tds132;

    /**
     * Get the tds132.
     *
     * @return float Returns the tds132.
     */
    public function getTds132() {
        return $this->tds132;
    }

    /**
     * Set the tds132.
     *
     * @param float $tds132 The tds132.
     */
    public function setTds132($tds132) {
        $this->tds132 = $tds132;
        return $this;
    }
}
