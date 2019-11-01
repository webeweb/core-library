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
 * Nb h majo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHMajoTrait {

    /**
     * Nb h majo.
     *
     * @var float
     */
    private $nbHMajo;

    /**
     * Get the nb h majo.
     *
     * @return float Returns the nb h majo.
     */
    public function getNbHMajo() {
        return $this->nbHMajo;
    }

    /**
     * Set the nb h majo.
     *
     * @param float $nbHMajo The nb h majo.
     */
    public function setNbHMajo($nbHMajo) {
        $this->nbHMajo = $nbHMajo;
        return $this;
    }
}
