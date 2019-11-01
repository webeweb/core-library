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
 * Ecart maxi lettrage auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatEcartMaxiLettrageAutoTrait {

    /**
     * Ecart maxi lettrage auto.
     *
     * @var float
     */
    private $ecartMaxiLettrageAuto;

    /**
     * Get the ecart maxi lettrage auto.
     *
     * @return float Returns the ecart maxi lettrage auto.
     */
    public function getEcartMaxiLettrageAuto() {
        return $this->ecartMaxiLettrageAuto;
    }

    /**
     * Set the ecart maxi lettrage auto.
     *
     * @param float $ecartMaxiLettrageAuto The ecart maxi lettrage auto.
     */
    public function setEcartMaxiLettrageAuto($ecartMaxiLettrageAuto) {
        $this->ecartMaxiLettrageAuto = $ecartMaxiLettrageAuto;
        return $this;
    }
}
