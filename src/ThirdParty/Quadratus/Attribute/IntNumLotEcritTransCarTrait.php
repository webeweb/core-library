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
 * Num lot ecrit trans car trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotEcritTransCarTrait {

    /**
     * Num lot ecrit trans car.
     *
     * @var int
     */
    private $numLotEcritTransCar;

    /**
     * Get the num lot ecrit trans car.
     *
     * @return int Returns the num lot ecrit trans car.
     */
    public function getNumLotEcritTransCar() {
        return $this->numLotEcritTransCar;
    }

    /**
     * Set the num lot ecrit trans car.
     *
     * @param int $numLotEcritTransCar The num lot ecrit trans car.
     */
    public function setNumLotEcritTransCar($numLotEcritTransCar) {
        $this->numLotEcritTransCar = $numLotEcritTransCar;
        return $this;
    }
}
