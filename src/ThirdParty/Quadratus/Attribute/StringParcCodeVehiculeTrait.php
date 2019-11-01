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
 * Parc code vehicule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringParcCodeVehiculeTrait {

    /**
     * Parc code vehicule.
     *
     * @var string
     */
    private $parcCodeVehicule;

    /**
     * Get the parc code vehicule.
     *
     * @return string Returns the parc code vehicule.
     */
    public function getParcCodeVehicule() {
        return $this->parcCodeVehicule;
    }

    /**
     * Set the parc code vehicule.
     *
     * @param string $parcCodeVehicule The parc code vehicule.
     */
    public function setParcCodeVehicule($parcCodeVehicule) {
        $this->parcCodeVehicule = $parcCodeVehicule;
        return $this;
    }
}
