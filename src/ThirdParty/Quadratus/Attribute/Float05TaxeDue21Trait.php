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
 * 05 taxe due21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float05TaxeDue21Trait {

    /**
     * 05 taxe due21.
     *
     * @var float
     */
    private $_05TaxeDue21;

    /**
     * Get the 05 taxe due21.
     *
     * @return float Returns the 05 taxe due21.
     */
    public function get05TaxeDue21() {
        return $this->_05TaxeDue21;
    }

    /**
     * Set the 05 taxe due21.
     *
     * @param float $_05TaxeDue21 The 05 taxe due21.
     */
    public function set05TaxeDue21($_05TaxeDue21) {
        $this->_05TaxeDue21 = $_05TaxeDue21;
        return $this;
    }
}
