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
 * Nb h nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHNuitTrait {

    /**
     * Nb h nuit.
     *
     * @var float
     */
    private $nbHNuit;

    /**
     * Get the nb h nuit.
     *
     * @return float Returns the nb h nuit.
     */
    public function getNbHNuit() {
        return $this->nbHNuit;
    }

    /**
     * Set the nb h nuit.
     *
     * @param float $nbHNuit The nb h nuit.
     */
    public function setNbHNuit($nbHNuit) {
        $this->nbHNuit = $nbHNuit;
        return $this;
    }
}
