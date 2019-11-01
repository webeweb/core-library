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
 * Car tec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCarTecTrait {

    /**
     * Car tec.
     *
     * @var string
     */
    private $carTec;

    /**
     * Get the car tec.
     *
     * @return string Returns the car tec.
     */
    public function getCarTec() {
        return $this->carTec;
    }

    /**
     * Set the car tec.
     *
     * @param string $carTec The car tec.
     */
    public function setCarTec($carTec) {
        $this->carTec = $carTec;
        return $this;
    }
}
