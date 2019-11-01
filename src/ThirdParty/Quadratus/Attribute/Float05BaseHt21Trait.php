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
 * 05 base ht21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float05BaseHt21Trait {

    /**
     * 05 base ht21.
     *
     * @var float
     */
    private $_05BaseHt21;

    /**
     * Get the 05 base ht21.
     *
     * @return float Returns the 05 base ht21.
     */
    public function get05BaseHt21() {
        return $this->_05BaseHt21;
    }

    /**
     * Set the 05 base ht21.
     *
     * @param float $_05BaseHt21 The 05 base ht21.
     */
    public function set05BaseHt21($_05BaseHt21) {
        $this->_05BaseHt21 = $_05BaseHt21;
        return $this;
    }
}
