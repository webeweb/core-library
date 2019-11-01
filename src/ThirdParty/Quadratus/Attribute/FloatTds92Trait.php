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
 * Tds92 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds92Trait {

    /**
     * Tds92.
     *
     * @var float
     */
    private $tds92;

    /**
     * Get the tds92.
     *
     * @return float Returns the tds92.
     */
    public function getTds92() {
        return $this->tds92;
    }

    /**
     * Set the tds92.
     *
     * @param float $tds92 The tds92.
     */
    public function setTds92($tds92) {
        $this->tds92 = $tds92;
        return $this;
    }
}
