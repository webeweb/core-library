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
 * Tds135 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds135Trait {

    /**
     * Tds135.
     *
     * @var float
     */
    private $tds135;

    /**
     * Get the tds135.
     *
     * @return float Returns the tds135.
     */
    public function getTds135() {
        return $this->tds135;
    }

    /**
     * Set the tds135.
     *
     * @param float $tds135 The tds135.
     */
    public function setTds135($tds135) {
        $this->tds135 = $tds135;
        return $this;
    }
}
