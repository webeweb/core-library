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
 * Mise en portefeuille iban f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMiseEnPortefeuilleIbanFTrait {

    /**
     * Mise en portefeuille iban f.
     *
     * @var string
     */
    private $miseEnPortefeuilleIbanF;

    /**
     * Get the mise en portefeuille iban f.
     *
     * @return string Returns the mise en portefeuille iban f.
     */
    public function getMiseEnPortefeuilleIbanF() {
        return $this->miseEnPortefeuilleIbanF;
    }

    /**
     * Set the mise en portefeuille iban f.
     *
     * @param string $miseEnPortefeuilleIbanF The mise en portefeuille iban f.
     */
    public function setMiseEnPortefeuilleIbanF($miseEnPortefeuilleIbanF) {
        $this->miseEnPortefeuilleIbanF = $miseEnPortefeuilleIbanF;
        return $this;
    }
}
