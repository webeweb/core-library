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
 * Nb h jour7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHJour7Trait {

    /**
     * Nb h jour7.
     *
     * @var float
     */
    private $nbHJour7;

    /**
     * Get the nb h jour7.
     *
     * @return float Returns the nb h jour7.
     */
    public function getNbHJour7() {
        return $this->nbHJour7;
    }

    /**
     * Set the nb h jour7.
     *
     * @param float $nbHJour7 The nb h jour7.
     */
    public function setNbHJour7($nbHJour7) {
        $this->nbHJour7 = $nbHJour7;
        return $this;
    }
}
