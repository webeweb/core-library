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
 * Tds125 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds125Trait {

    /**
     * Tds125.
     *
     * @var float
     */
    private $tds125;

    /**
     * Get the tds125.
     *
     * @return float Returns the tds125.
     */
    public function getTds125() {
        return $this->tds125;
    }

    /**
     * Set the tds125.
     *
     * @param float $tds125 The tds125.
     */
    public function setTds125($tds125) {
        $this->tds125 = $tds125;
        return $this;
    }
}
