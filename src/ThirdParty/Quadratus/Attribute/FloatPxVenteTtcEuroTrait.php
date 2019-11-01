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
 * Px vente ttc euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxVenteTtcEuroTrait {

    /**
     * Px vente ttc euro.
     *
     * @var float
     */
    private $pxVenteTtcEuro;

    /**
     * Get the px vente ttc euro.
     *
     * @return float Returns the px vente ttc euro.
     */
    public function getPxVenteTtcEuro() {
        return $this->pxVenteTtcEuro;
    }

    /**
     * Set the px vente ttc euro.
     *
     * @param float $pxVenteTtcEuro The px vente ttc euro.
     */
    public function setPxVenteTtcEuro($pxVenteTtcEuro) {
        $this->pxVenteTtcEuro = $pxVenteTtcEuro;
        return $this;
    }
}
