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
 * Mise en portefeuille rib f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMiseEnPortefeuilleRibFTrait {

    /**
     * Mise en portefeuille rib f.
     *
     * @var string
     */
    private $miseEnPortefeuilleRibF;

    /**
     * Get the mise en portefeuille rib f.
     *
     * @return string Returns the mise en portefeuille rib f.
     */
    public function getMiseEnPortefeuilleRibF() {
        return $this->miseEnPortefeuilleRibF;
    }

    /**
     * Set the mise en portefeuille rib f.
     *
     * @param string $miseEnPortefeuilleRibF The mise en portefeuille rib f.
     */
    public function setMiseEnPortefeuilleRibF($miseEnPortefeuilleRibF) {
        $this->miseEnPortefeuilleRibF = $miseEnPortefeuilleRibF;
        return $this;
    }
}
