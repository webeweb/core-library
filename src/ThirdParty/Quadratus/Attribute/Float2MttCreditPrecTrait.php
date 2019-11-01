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
 * 2 mtt credit prec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float2MttCreditPrecTrait {

    /**
     * 2 mtt credit prec.
     *
     * @var float
     */
    private $_2MttCreditPrec;

    /**
     * Get the 2 mtt credit prec.
     *
     * @return float Returns the 2 mtt credit prec.
     */
    public function get2MttCreditPrec() {
        return $this->_2MttCreditPrec;
    }

    /**
     * Set the 2 mtt credit prec.
     *
     * @param float $_2MttCreditPrec The 2 mtt credit prec.
     */
    public function set2MttCreditPrec($_2MttCreditPrec) {
        $this->_2MttCreditPrec = $_2MttCreditPrec;
        return $this;
    }
}
