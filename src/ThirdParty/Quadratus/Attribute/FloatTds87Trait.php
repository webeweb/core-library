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
 * Tds87 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds87Trait {

    /**
     * Tds87.
     *
     * @var float
     */
    private $tds87;

    /**
     * Get the tds87.
     *
     * @return float Returns the tds87.
     */
    public function getTds87() {
        return $this->tds87;
    }

    /**
     * Set the tds87.
     *
     * @param float $tds87 The tds87.
     */
    public function setTds87($tds87) {
        $this->tds87 = $tds87;
        return $this;
    }
}
