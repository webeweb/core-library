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
 * Tds86 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds86Trait {

    /**
     * Tds86.
     *
     * @var float
     */
    private $tds86;

    /**
     * Get the tds86.
     *
     * @return float Returns the tds86.
     */
    public function getTds86() {
        return $this->tds86;
    }

    /**
     * Set the tds86.
     *
     * @param float $tds86 The tds86.
     */
    public function setTds86($tds86) {
        $this->tds86 = $tds86;
        return $this;
    }
}
