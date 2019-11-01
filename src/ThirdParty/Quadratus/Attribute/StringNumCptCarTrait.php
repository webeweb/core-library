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
 * Num cpt car trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptCarTrait {

    /**
     * Num cpt car.
     *
     * @var string
     */
    private $numCptCar;

    /**
     * Get the num cpt car.
     *
     * @return string Returns the num cpt car.
     */
    public function getNumCptCar() {
        return $this->numCptCar;
    }

    /**
     * Set the num cpt car.
     *
     * @param string $numCptCar The num cpt car.
     */
    public function setNumCptCar($numCptCar) {
        $this->numCptCar = $numCptCar;
        return $this;
    }
}
