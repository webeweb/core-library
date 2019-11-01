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
 * Nb chambres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbChambresTrait {

    /**
     * Nb chambres.
     *
     * @var float
     */
    private $nbChambres;

    /**
     * Get the nb chambres.
     *
     * @return float Returns the nb chambres.
     */
    public function getNbChambres() {
        return $this->nbChambres;
    }

    /**
     * Set the nb chambres.
     *
     * @param float $nbChambres The nb chambres.
     */
    public function setNbChambres($nbChambres) {
        $this->nbChambres = $nbChambres;
        return $this;
    }
}
