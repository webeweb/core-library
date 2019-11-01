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
 * Tds88 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds88Trait {

    /**
     * Tds88.
     *
     * @var float
     */
    private $tds88;

    /**
     * Get the tds88.
     *
     * @return float Returns the tds88.
     */
    public function getTds88() {
        return $this->tds88;
    }

    /**
     * Set the tds88.
     *
     * @param float $tds88 The tds88.
     */
    public function setTds88($tds88) {
        $this->tds88 = $tds88;
        return $this;
    }
}
