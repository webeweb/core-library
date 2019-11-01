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
 * Commercial facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCommercialFactureTrait {

    /**
     * Commercial facture.
     *
     * @var bool
     */
    private $commercialFacture;

    /**
     * Get the commercial facture.
     *
     * @return bool Returns the commercial facture.
     */
    public function getCommercialFacture() {
        return $this->commercialFacture;
    }

    /**
     * Set the commercial facture.
     *
     * @param bool $commercialFacture The commercial facture.
     */
    public function setCommercialFacture($commercialFacture) {
        $this->commercialFacture = $commercialFacture;
        return $this;
    }
}
