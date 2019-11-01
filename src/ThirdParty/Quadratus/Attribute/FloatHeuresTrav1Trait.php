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
 * Heures trav1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresTrav1Trait {

    /**
     * Heures trav1.
     *
     * @var float
     */
    private $heuresTrav1;

    /**
     * Get the heures trav1.
     *
     * @return float Returns the heures trav1.
     */
    public function getHeuresTrav1() {
        return $this->heuresTrav1;
    }

    /**
     * Set the heures trav1.
     *
     * @param float $heuresTrav1 The heures trav1.
     */
    public function setHeuresTrav1($heuresTrav1) {
        $this->heuresTrav1 = $heuresTrav1;
        return $this;
    }
}
