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
 * Ecart mini ctrl tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatEcartMiniCtrlTvaTrait {

    /**
     * Ecart mini ctrl tva.
     *
     * @var float
     */
    private $ecartMiniCtrlTva;

    /**
     * Get the ecart mini ctrl tva.
     *
     * @return float Returns the ecart mini ctrl tva.
     */
    public function getEcartMiniCtrlTva() {
        return $this->ecartMiniCtrlTva;
    }

    /**
     * Set the ecart mini ctrl tva.
     *
     * @param float $ecartMiniCtrlTva The ecart mini ctrl tva.
     */
    public function setEcartMiniCtrlTva($ecartMiniCtrlTva) {
        $this->ecartMiniCtrlTva = $ecartMiniCtrlTva;
        return $this;
    }
}
