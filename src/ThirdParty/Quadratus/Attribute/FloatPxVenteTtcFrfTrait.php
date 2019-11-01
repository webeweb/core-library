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
 * Px vente ttc frf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxVenteTtcFrfTrait {

    /**
     * Px vente ttc frf.
     *
     * @var float
     */
    private $pxVenteTtcFrf;

    /**
     * Get the px vente ttc frf.
     *
     * @return float Returns the px vente ttc frf.
     */
    public function getPxVenteTtcFrf() {
        return $this->pxVenteTtcFrf;
    }

    /**
     * Set the px vente ttc frf.
     *
     * @param float $pxVenteTtcFrf The px vente ttc frf.
     */
    public function setPxVenteTtcFrf($pxVenteTtcFrf) {
        $this->pxVenteTtcFrf = $pxVenteTtcFrf;
        return $this;
    }
}
