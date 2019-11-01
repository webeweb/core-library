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
 * Crrpm value ltf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCrrpmValueLtfTrait {

    /**
     * Crrpm value ltf.
     *
     * @var float
     */
    private $crrpmValueLtf;

    /**
     * Get the crrpm value ltf.
     *
     * @return float Returns the crrpm value ltf.
     */
    public function getCrrpmValueLtf() {
        return $this->crrpmValueLtf;
    }

    /**
     * Set the crrpm value ltf.
     *
     * @param float $crrpmValueLtf The crrpm value ltf.
     */
    public function setCrrpmValueLtf($crrpmValueLtf) {
        $this->crrpmValueLtf = $crrpmValueLtf;
        return $this;
    }
}
