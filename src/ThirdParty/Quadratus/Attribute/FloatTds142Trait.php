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
 * Tds142 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds142Trait {

    /**
     * Tds142.
     *
     * @var float
     */
    private $tds142;

    /**
     * Get the tds142.
     *
     * @return float Returns the tds142.
     */
    public function getTds142() {
        return $this->tds142;
    }

    /**
     * Set the tds142.
     *
     * @param float $tds142 The tds142.
     */
    public function setTds142($tds142) {
        $this->tds142 = $tds142;
        return $this;
    }
}
