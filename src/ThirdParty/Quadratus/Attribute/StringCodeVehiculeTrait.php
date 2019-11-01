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
 * Code vehicule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeVehiculeTrait {

    /**
     * Code vehicule.
     *
     * @var string
     */
    private $codeVehicule;

    /**
     * Get the code vehicule.
     *
     * @return string Returns the code vehicule.
     */
    public function getCodeVehicule() {
        return $this->codeVehicule;
    }

    /**
     * Set the code vehicule.
     *
     * @param string $codeVehicule The code vehicule.
     */
    public function setCodeVehicule($codeVehicule) {
        $this->codeVehicule = $codeVehicule;
        return $this;
    }
}
