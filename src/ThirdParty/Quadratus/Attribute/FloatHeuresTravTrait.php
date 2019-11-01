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
 * Heures trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresTravTrait {

    /**
     * Heures trav.
     *
     * @var float
     */
    private $heuresTrav;

    /**
     * Get the heures trav.
     *
     * @return float Returns the heures trav.
     */
    public function getHeuresTrav() {
        return $this->heuresTrav;
    }

    /**
     * Set the heures trav.
     *
     * @param float $heuresTrav The heures trav.
     */
    public function setHeuresTrav($heuresTrav) {
        $this->heuresTrav = $heuresTrav;
        return $this;
    }
}
