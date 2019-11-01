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
 * Ad amort anterieur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdAmortAnterieurTrait {

    /**
     * Ad amort anterieur.
     *
     * @var float
     */
    private $adAmortAnterieur;

    /**
     * Get the ad amort anterieur.
     *
     * @return float Returns the ad amort anterieur.
     */
    public function getAdAmortAnterieur() {
        return $this->adAmortAnterieur;
    }

    /**
     * Set the ad amort anterieur.
     *
     * @param float $adAmortAnterieur The ad amort anterieur.
     */
    public function setAdAmortAnterieur($adAmortAnterieur) {
        $this->adAmortAnterieur = $adAmortAnterieur;
        return $this;
    }
}
