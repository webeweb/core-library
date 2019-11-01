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
 * Pv maxi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPvMaxiTrait {

    /**
     * Pv maxi.
     *
     * @var float
     */
    private $pvMaxi;

    /**
     * Get the pv maxi.
     *
     * @return float Returns the pv maxi.
     */
    public function getPvMaxi() {
        return $this->pvMaxi;
    }

    /**
     * Set the pv maxi.
     *
     * @param float $pvMaxi The pv maxi.
     */
    public function setPvMaxi($pvMaxi) {
        $this->pvMaxi = $pvMaxi;
        return $this;
    }
}
