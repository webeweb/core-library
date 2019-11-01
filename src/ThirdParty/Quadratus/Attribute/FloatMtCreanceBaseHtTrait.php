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
 * Mt creance base ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCreanceBaseHtTrait {

    /**
     * Mt creance base ht.
     *
     * @var float
     */
    private $mtCreanceBaseHt;

    /**
     * Get the mt creance base ht.
     *
     * @return float Returns the mt creance base ht.
     */
    public function getMtCreanceBaseHt() {
        return $this->mtCreanceBaseHt;
    }

    /**
     * Set the mt creance base ht.
     *
     * @param float $mtCreanceBaseHt The mt creance base ht.
     */
    public function setMtCreanceBaseHt($mtCreanceBaseHt) {
        $this->mtCreanceBaseHt = $mtCreanceBaseHt;
        return $this;
    }
}
