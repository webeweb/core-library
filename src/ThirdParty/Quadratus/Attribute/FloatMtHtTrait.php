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
 * Mt ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtHtTrait {

    /**
     * Mt ht.
     *
     * @var float
     */
    private $mtHt;

    /**
     * Get the mt ht.
     *
     * @return float Returns the mt ht.
     */
    public function getMtHt() {
        return $this->mtHt;
    }

    /**
     * Set the mt ht.
     *
     * @param float $mtHt The mt ht.
     */
    public function setMtHt($mtHt) {
        $this->mtHt = $mtHt;
        return $this;
    }
}
