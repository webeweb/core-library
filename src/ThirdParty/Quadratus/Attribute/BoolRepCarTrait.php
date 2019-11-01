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
 * Rep car trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepCarTrait {

    /**
     * Rep car.
     *
     * @var bool
     */
    private $repCar;

    /**
     * Get the rep car.
     *
     * @return bool Returns the rep car.
     */
    public function getRepCar() {
        return $this->repCar;
    }

    /**
     * Set the rep car.
     *
     * @param bool $repCar The rep car.
     */
    public function setRepCar($repCar) {
        $this->repCar = $repCar;
        return $this;
    }
}
