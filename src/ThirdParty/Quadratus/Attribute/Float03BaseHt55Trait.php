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
 * 03 base ht55 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float03BaseHt55Trait {

    /**
     * 03 base ht55.
     *
     * @var float
     */
    private $_03BaseHt55;

    /**
     * Get the 03 base ht55.
     *
     * @return float Returns the 03 base ht55.
     */
    public function get03BaseHt55() {
        return $this->_03BaseHt55;
    }

    /**
     * Set the 03 base ht55.
     *
     * @param float $_03BaseHt55 The 03 base ht55.
     */
    public function set03BaseHt55($_03BaseHt55) {
        $this->_03BaseHt55 = $_03BaseHt55;
        return $this;
    }
}
