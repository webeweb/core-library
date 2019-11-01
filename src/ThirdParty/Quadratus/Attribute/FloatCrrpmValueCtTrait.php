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
 * Crrpm value ct trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCrrpmValueCtTrait {

    /**
     * Crrpm value ct.
     *
     * @var float
     */
    private $crrpmValueCt;

    /**
     * Get the crrpm value ct.
     *
     * @return float Returns the crrpm value ct.
     */
    public function getCrrpmValueCt() {
        return $this->crrpmValueCt;
    }

    /**
     * Set the crrpm value ct.
     *
     * @param float $crrpmValueCt The crrpm value ct.
     */
    public function setCrrpmValueCt($crrpmValueCt) {
        $this->crrpmValueCt = $crrpmValueCt;
        return $this;
    }
}
