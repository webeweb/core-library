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
 * Nb enfants a charge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbEnfantsAChargeTrait {

    /**
     * Nb enfants a charge.
     *
     * @var string
     */
    private $nbEnfantsACharge;

    /**
     * Get the nb enfants a charge.
     *
     * @return string Returns the nb enfants a charge.
     */
    public function getNbEnfantsACharge() {
        return $this->nbEnfantsACharge;
    }

    /**
     * Set the nb enfants a charge.
     *
     * @param string $nbEnfantsACharge The nb enfants a charge.
     */
    public function setNbEnfantsACharge($nbEnfantsACharge) {
        $this->nbEnfantsACharge = $nbEnfantsACharge;
        return $this;
    }
}
