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
 * 07 base ht taux part trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float07BaseHtTauxPartTrait {

    /**
     * 07 base ht taux part.
     *
     * @var float
     */
    private $_07BaseHtTauxPart;

    /**
     * Get the 07 base ht taux part.
     *
     * @return float Returns the 07 base ht taux part.
     */
    public function get07BaseHtTauxPart() {
        return $this->_07BaseHtTauxPart;
    }

    /**
     * Set the 07 base ht taux part.
     *
     * @param float $_07BaseHtTauxPart The 07 base ht taux part.
     */
    public function set07BaseHtTauxPart($_07BaseHtTauxPart) {
        $this->_07BaseHtTauxPart = $_07BaseHtTauxPart;
        return $this;
    }
}
