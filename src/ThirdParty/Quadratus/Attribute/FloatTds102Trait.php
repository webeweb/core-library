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
 * Tds102 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds102Trait {

    /**
     * Tds102.
     *
     * @var float
     */
    private $tds102;

    /**
     * Get the tds102.
     *
     * @return float Returns the tds102.
     */
    public function getTds102() {
        return $this->tds102;
    }

    /**
     * Set the tds102.
     *
     * @param float $tds102 The tds102.
     */
    public function setTds102($tds102) {
        $this->tds102 = $tds102;
        return $this;
    }
}
