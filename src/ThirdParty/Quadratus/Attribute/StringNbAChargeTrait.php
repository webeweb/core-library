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
 * Nb a charge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbAChargeTrait {

    /**
     * Nb a charge.
     *
     * @var string
     */
    private $nbACharge;

    /**
     * Get the nb a charge.
     *
     * @return string Returns the nb a charge.
     */
    public function getNbACharge() {
        return $this->nbACharge;
    }

    /**
     * Set the nb a charge.
     *
     * @param string $nbACharge The nb a charge.
     */
    public function setNbACharge($nbACharge) {
        $this->nbACharge = $nbACharge;
        return $this;
    }
}
