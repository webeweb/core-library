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
 * Crrpm value lt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCrrpmValueLtTrait {

    /**
     * Crrpm value lt.
     *
     * @var float
     */
    private $crrpmValueLt;

    /**
     * Get the crrpm value lt.
     *
     * @return float Returns the crrpm value lt.
     */
    public function getCrrpmValueLt() {
        return $this->crrpmValueLt;
    }

    /**
     * Set the crrpm value lt.
     *
     * @param float $crrpmValueLt The crrpm value lt.
     */
    public function setCrrpmValueLt($crrpmValueLt) {
        $this->crrpmValueLt = $crrpmValueLt;
        return $this;
    }
}
