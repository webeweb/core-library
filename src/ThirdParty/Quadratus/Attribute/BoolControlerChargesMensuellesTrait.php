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
 * Controler charges mensuelles trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolControlerChargesMensuellesTrait {

    /**
     * Controler charges mensuelles.
     *
     * @var bool
     */
    private $controlerChargesMensuelles;

    /**
     * Get the controler charges mensuelles.
     *
     * @return bool Returns the controler charges mensuelles.
     */
    public function getControlerChargesMensuelles() {
        return $this->controlerChargesMensuelles;
    }

    /**
     * Set the controler charges mensuelles.
     *
     * @param bool $controlerChargesMensuelles The controler charges mensuelles.
     */
    public function setControlerChargesMensuelles($controlerChargesMensuelles) {
        $this->controlerChargesMensuelles = $controlerChargesMensuelles;
        return $this;
    }
}
