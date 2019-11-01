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
 * Prct fg2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrctFg2Trait {

    /**
     * Prct fg2.
     *
     * @var float
     */
    private $prctFg2;

    /**
     * Get the prct fg2.
     *
     * @return float Returns the prct fg2.
     */
    public function getPrctFg2() {
        return $this->prctFg2;
    }

    /**
     * Set the prct fg2.
     *
     * @param float $prctFg2 The prct fg2.
     */
    public function setPrctFg2($prctFg2) {
        $this->prctFg2 = $prctFg2;
        return $this;
    }
}
