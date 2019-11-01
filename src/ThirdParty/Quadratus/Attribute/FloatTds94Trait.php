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
 * Tds94 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds94Trait {

    /**
     * Tds94.
     *
     * @var float
     */
    private $tds94;

    /**
     * Get the tds94.
     *
     * @return float Returns the tds94.
     */
    public function getTds94() {
        return $this->tds94;
    }

    /**
     * Set the tds94.
     *
     * @param float $tds94 The tds94.
     */
    public function setTds94($tds94) {
        $this->tds94 = $tds94;
        return $this;
    }
}
