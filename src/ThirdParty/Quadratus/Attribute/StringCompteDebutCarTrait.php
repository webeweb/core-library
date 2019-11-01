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
 * Compte debut car trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteDebutCarTrait {

    /**
     * Compte debut car.
     *
     * @var string
     */
    private $compteDebutCar;

    /**
     * Get the compte debut car.
     *
     * @return string Returns the compte debut car.
     */
    public function getCompteDebutCar() {
        return $this->compteDebutCar;
    }

    /**
     * Set the compte debut car.
     *
     * @param string $compteDebutCar The compte debut car.
     */
    public function setCompteDebutCar($compteDebutCar) {
        $this->compteDebutCar = $compteDebutCar;
        return $this;
    }
}
