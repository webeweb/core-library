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
 * Mt tare trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtTareTrait {

    /**
     * Mt tare.
     *
     * @var float
     */
    private $mtTare;

    /**
     * Get the mt tare.
     *
     * @return float Returns the mt tare.
     */
    public function getMtTare() {
        return $this->mtTare;
    }

    /**
     * Set the mt tare.
     *
     * @param float $mtTare The mt tare.
     */
    public function setMtTare($mtTare) {
        $this->mtTare = $mtTare;
        return $this;
    }
}
