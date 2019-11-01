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
 * Nb h trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHTravTrait {

    /**
     * Nb h trav.
     *
     * @var float
     */
    private $nbHTrav;

    /**
     * Get the nb h trav.
     *
     * @return float Returns the nb h trav.
     */
    public function getNbHTrav() {
        return $this->nbHTrav;
    }

    /**
     * Set the nb h trav.
     *
     * @param float $nbHTrav The nb h trav.
     */
    public function setNbHTrav($nbHTrav) {
        $this->nbHTrav = $nbHTrav;
        return $this;
    }
}
