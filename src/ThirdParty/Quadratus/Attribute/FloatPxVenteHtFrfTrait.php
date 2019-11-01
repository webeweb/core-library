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
 * Px vente ht frf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxVenteHtFrfTrait {

    /**
     * Px vente ht frf.
     *
     * @var float
     */
    private $pxVenteHtFrf;

    /**
     * Get the px vente ht frf.
     *
     * @return float Returns the px vente ht frf.
     */
    public function getPxVenteHtFrf() {
        return $this->pxVenteHtFrf;
    }

    /**
     * Set the px vente ht frf.
     *
     * @param float $pxVenteHtFrf The px vente ht frf.
     */
    public function setPxVenteHtFrf($pxVenteHtFrf) {
        $this->pxVenteHtFrf = $pxVenteHtFrf;
        return $this;
    }
}
