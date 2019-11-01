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
 * Heures trav2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresTrav2Trait {

    /**
     * Heures trav2.
     *
     * @var float
     */
    private $heuresTrav2;

    /**
     * Get the heures trav2.
     *
     * @return float Returns the heures trav2.
     */
    public function getHeuresTrav2() {
        return $this->heuresTrav2;
    }

    /**
     * Set the heures trav2.
     *
     * @param float $heuresTrav2 The heures trav2.
     */
    public function setHeuresTrav2($heuresTrav2) {
        $this->heuresTrav2 = $heuresTrav2;
        return $this;
    }
}
