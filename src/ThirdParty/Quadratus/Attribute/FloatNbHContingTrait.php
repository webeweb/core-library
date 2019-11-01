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
 * Nb h conting trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHContingTrait {

    /**
     * Nb h conting.
     *
     * @var float
     */
    private $nbHConting;

    /**
     * Get the nb h conting.
     *
     * @return float Returns the nb h conting.
     */
    public function getNbHConting() {
        return $this->nbHConting;
    }

    /**
     * Set the nb h conting.
     *
     * @param float $nbHConting The nb h conting.
     */
    public function setNbHConting($nbHConting) {
        $this->nbHConting = $nbHConting;
        return $this;
    }
}
