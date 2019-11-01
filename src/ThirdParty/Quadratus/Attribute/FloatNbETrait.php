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
 * Nb e trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbETrait {

    /**
     * Nb e.
     *
     * @var float
     */
    private $nbE;

    /**
     * Get the nb e.
     *
     * @return float Returns the nb e.
     */
    public function getNbE() {
        return $this->nbE;
    }

    /**
     * Set the nb e.
     *
     * @param float $nbE The nb e.
     */
    public function setNbE($nbE) {
        $this->nbE = $nbE;
        return $this;
    }
}
