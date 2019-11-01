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
 * Heures trav3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresTrav3Trait {

    /**
     * Heures trav3.
     *
     * @var float
     */
    private $heuresTrav3;

    /**
     * Get the heures trav3.
     *
     * @return float Returns the heures trav3.
     */
    public function getHeuresTrav3() {
        return $this->heuresTrav3;
    }

    /**
     * Set the heures trav3.
     *
     * @param float $heuresTrav3 The heures trav3.
     */
    public function setHeuresTrav3($heuresTrav3) {
        $this->heuresTrav3 = $heuresTrav3;
        return $this;
    }
}
