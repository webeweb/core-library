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
 * Tds95 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds95Trait {

    /**
     * Tds95.
     *
     * @var float
     */
    private $tds95;

    /**
     * Get the tds95.
     *
     * @return float Returns the tds95.
     */
    public function getTds95() {
        return $this->tds95;
    }

    /**
     * Set the tds95.
     *
     * @param float $tds95 The tds95.
     */
    public function setTds95($tds95) {
        $this->tds95 = $tds95;
        return $this;
    }
}
