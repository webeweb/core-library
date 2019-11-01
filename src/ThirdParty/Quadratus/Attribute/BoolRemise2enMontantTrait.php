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
 * Remise2en montant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemise2enMontantTrait {

    /**
     * Remise2en montant.
     *
     * @var bool
     */
    private $remise2enMontant;

    /**
     * Get the remise2en montant.
     *
     * @return bool Returns the remise2en montant.
     */
    public function getRemise2enMontant() {
        return $this->remise2enMontant;
    }

    /**
     * Set the remise2en montant.
     *
     * @param bool $remise2enMontant The remise2en montant.
     */
    public function setRemise2enMontant($remise2enMontant) {
        $this->remise2enMontant = $remise2enMontant;
        return $this;
    }
}
