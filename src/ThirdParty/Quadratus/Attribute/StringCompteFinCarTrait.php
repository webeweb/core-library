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
 * Compte fin car trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteFinCarTrait {

    /**
     * Compte fin car.
     *
     * @var string
     */
    private $compteFinCar;

    /**
     * Get the compte fin car.
     *
     * @return string Returns the compte fin car.
     */
    public function getCompteFinCar() {
        return $this->compteFinCar;
    }

    /**
     * Set the compte fin car.
     *
     * @param string $compteFinCar The compte fin car.
     */
    public function setCompteFinCar($compteFinCar) {
        $this->compteFinCar = $compteFinCar;
        return $this;
    }
}
