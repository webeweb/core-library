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
 * Tds112 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds112Trait {

    /**
     * Tds112.
     *
     * @var float
     */
    private $tds112;

    /**
     * Get the tds112.
     *
     * @return float Returns the tds112.
     */
    public function getTds112() {
        return $this->tds112;
    }

    /**
     * Set the tds112.
     *
     * @param float $tds112 The tds112.
     */
    public function setTds112($tds112) {
        $this->tds112 = $tds112;
        return $this;
    }
}
