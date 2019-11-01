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
 * Nb km trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbKmTrait {

    /**
     * Nb km.
     *
     * @var float
     */
    private $nbKm;

    /**
     * Get the nb km.
     *
     * @return float Returns the nb km.
     */
    public function getNbKm() {
        return $this->nbKm;
    }

    /**
     * Set the nb km.
     *
     * @param float $nbKm The nb km.
     */
    public function setNbKm($nbKm) {
        $this->nbKm = $nbKm;
        return $this;
    }
}
