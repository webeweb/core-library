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
 * Ht taux7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHtTaux7Trait {

    /**
     * Ht taux7.
     *
     * @var float
     */
    private $htTaux7;

    /**
     * Get the ht taux7.
     *
     * @return float Returns the ht taux7.
     */
    public function getHtTaux7() {
        return $this->htTaux7;
    }

    /**
     * Set the ht taux7.
     *
     * @param float $htTaux7 The ht taux7.
     */
    public function setHtTaux7($htTaux7) {
        $this->htTaux7 = $htTaux7;
        return $this;
    }
}
