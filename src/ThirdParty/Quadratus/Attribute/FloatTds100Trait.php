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
 * Tds100 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds100Trait {

    /**
     * Tds100.
     *
     * @var float
     */
    private $tds100;

    /**
     * Get the tds100.
     *
     * @return float Returns the tds100.
     */
    public function getTds100() {
        return $this->tds100;
    }

    /**
     * Set the tds100.
     *
     * @param float $tds100 The tds100.
     */
    public function setTds100($tds100) {
        $this->tds100 = $tds100;
        return $this;
    }
}
