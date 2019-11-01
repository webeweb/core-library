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
 * Tds93 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds93Trait {

    /**
     * Tds93.
     *
     * @var float
     */
    private $tds93;

    /**
     * Get the tds93.
     *
     * @return float Returns the tds93.
     */
    public function getTds93() {
        return $this->tds93;
    }

    /**
     * Set the tds93.
     *
     * @param float $tds93 The tds93.
     */
    public function setTds93($tds93) {
        $this->tds93 = $tds93;
        return $this;
    }
}
