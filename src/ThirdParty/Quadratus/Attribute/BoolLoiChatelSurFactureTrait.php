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
 * Loi chatel sur facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLoiChatelSurFactureTrait {

    /**
     * Loi chatel sur facture.
     *
     * @var bool
     */
    private $loiChatelSurFacture;

    /**
     * Get the loi chatel sur facture.
     *
     * @return bool Returns the loi chatel sur facture.
     */
    public function getLoiChatelSurFacture() {
        return $this->loiChatelSurFacture;
    }

    /**
     * Set the loi chatel sur facture.
     *
     * @param bool $loiChatelSurFacture The loi chatel sur facture.
     */
    public function setLoiChatelSurFacture($loiChatelSurFacture) {
        $this->loiChatelSurFacture = $loiChatelSurFacture;
        return $this;
    }
}
