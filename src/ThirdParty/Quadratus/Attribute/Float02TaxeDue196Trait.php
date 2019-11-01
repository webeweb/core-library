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
 * 02 taxe due196 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float02TaxeDue196Trait {

    /**
     * 02 taxe due196.
     *
     * @var float
     */
    private $_02TaxeDue196;

    /**
     * Get the 02 taxe due196.
     *
     * @return float Returns the 02 taxe due196.
     */
    public function get02TaxeDue196() {
        return $this->_02TaxeDue196;
    }

    /**
     * Set the 02 taxe due196.
     *
     * @param float $_02TaxeDue196 The 02 taxe due196.
     */
    public function set02TaxeDue196($_02TaxeDue196) {
        $this->_02TaxeDue196 = $_02TaxeDue196;
        return $this;
    }
}
