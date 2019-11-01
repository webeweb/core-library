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
 * Prct fg1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrctFg1Trait {

    /**
     * Prct fg1.
     *
     * @var float
     */
    private $prctFg1;

    /**
     * Get the prct fg1.
     *
     * @return float Returns the prct fg1.
     */
    public function getPrctFg1() {
        return $this->prctFg1;
    }

    /**
     * Set the prct fg1.
     *
     * @param float $prctFg1 The prct fg1.
     */
    public function setPrctFg1($prctFg1) {
        $this->prctFg1 = $prctFg1;
        return $this;
    }
}
