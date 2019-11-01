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
 * Tds137 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds137Trait {

    /**
     * Tds137.
     *
     * @var float
     */
    private $tds137;

    /**
     * Get the tds137.
     *
     * @return float Returns the tds137.
     */
    public function getTds137() {
        return $this->tds137;
    }

    /**
     * Set the tds137.
     *
     * @param float $tds137 The tds137.
     */
    public function setTds137($tds137) {
        $this->tds137 = $tds137;
        return $this;
    }
}
