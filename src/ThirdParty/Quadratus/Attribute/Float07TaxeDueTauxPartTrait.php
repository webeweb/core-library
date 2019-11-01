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
 * 07 taxe due taux part trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float07TaxeDueTauxPartTrait {

    /**
     * 07 taxe due taux part.
     *
     * @var float
     */
    private $_07TaxeDueTauxPart;

    /**
     * Get the 07 taxe due taux part.
     *
     * @return float Returns the 07 taxe due taux part.
     */
    public function get07TaxeDueTauxPart() {
        return $this->_07TaxeDueTauxPart;
    }

    /**
     * Set the 07 taxe due taux part.
     *
     * @param float $_07TaxeDueTauxPart The 07 taxe due taux part.
     */
    public function set07TaxeDueTauxPart($_07TaxeDueTauxPart) {
        $this->_07TaxeDueTauxPart = $_07TaxeDueTauxPart;
        return $this;
    }
}
