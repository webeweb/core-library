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
 * Fillon sap trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFillonSapTrait {

    /**
     * Fillon sap.
     *
     * @var bool
     */
    private $fillonSap;

    /**
     * Get the fillon sap.
     *
     * @return bool Returns the fillon sap.
     */
    public function getFillonSap() {
        return $this->fillonSap;
    }

    /**
     * Set the fillon sap.
     *
     * @param bool $fillonSap The fillon sap.
     */
    public function setFillonSap($fillonSap) {
        $this->fillonSap = $fillonSap;
        return $this;
    }
}
