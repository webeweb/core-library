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
 * Nb paniers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbPaniersTrait {

    /**
     * Nb paniers.
     *
     * @var float
     */
    private $nbPaniers;

    /**
     * Get the nb paniers.
     *
     * @return float Returns the nb paniers.
     */
    public function getNbPaniers() {
        return $this->nbPaniers;
    }

    /**
     * Set the nb paniers.
     *
     * @param float $nbPaniers The nb paniers.
     */
    public function setNbPaniers($nbPaniers) {
        $this->nbPaniers = $nbPaniers;
        return $this;
    }
}
