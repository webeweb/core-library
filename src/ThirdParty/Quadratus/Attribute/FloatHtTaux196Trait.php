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
 * Ht taux196 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHtTaux196Trait {

    /**
     * Ht taux196.
     *
     * @var float
     */
    private $htTaux196;

    /**
     * Get the ht taux196.
     *
     * @return float Returns the ht taux196.
     */
    public function getHtTaux196() {
        return $this->htTaux196;
    }

    /**
     * Set the ht taux196.
     *
     * @param float $htTaux196 The ht taux196.
     */
    public function setHtTaux196($htTaux196) {
        $this->htTaux196 = $htTaux196;
        return $this;
    }
}
