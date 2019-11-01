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
 * Ecart cumule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatEcartCumuleTrait {

    /**
     * Ecart cumule.
     *
     * @var float
     */
    private $ecartCumule;

    /**
     * Get the ecart cumule.
     *
     * @return float Returns the ecart cumule.
     */
    public function getEcartCumule() {
        return $this->ecartCumule;
    }

    /**
     * Set the ecart cumule.
     *
     * @param float $ecartCumule The ecart cumule.
     */
    public function setEcartCumule($ecartCumule) {
        $this->ecartCumule = $ecartCumule;
        return $this;
    }
}
