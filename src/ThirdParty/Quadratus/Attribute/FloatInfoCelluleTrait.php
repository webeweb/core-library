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
 * Info cellule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatInfoCelluleTrait {

    /**
     * Info cellule.
     *
     * @var float
     */
    private $infoCellule;

    /**
     * Get the info cellule.
     *
     * @return float Returns the info cellule.
     */
    public function getInfoCellule() {
        return $this->infoCellule;
    }

    /**
     * Set the info cellule.
     *
     * @param float $infoCellule The info cellule.
     */
    public function setInfoCellule($infoCellule) {
        $this->infoCellule = $infoCellule;
        return $this;
    }
}
