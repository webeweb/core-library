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
 * 03 taxe due55 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float03TaxeDue55Trait {

    /**
     * 03 taxe due55.
     *
     * @var float
     */
    private $_03TaxeDue55;

    /**
     * Get the 03 taxe due55.
     *
     * @return float Returns the 03 taxe due55.
     */
    public function get03TaxeDue55() {
        return $this->_03TaxeDue55;
    }

    /**
     * Set the 03 taxe due55.
     *
     * @param float $_03TaxeDue55 The 03 taxe due55.
     */
    public function set03TaxeDue55($_03TaxeDue55) {
        $this->_03TaxeDue55 = $_03TaxeDue55;
        return $this;
    }
}
