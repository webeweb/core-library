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
 * Taux sal tr b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxSalTrBTrait {

    /**
     * Taux sal tr b.
     *
     * @var float
     */
    private $tauxSalTrB;

    /**
     * Get the taux sal tr b.
     *
     * @return float Returns the taux sal tr b.
     */
    public function getTauxSalTrB() {
        return $this->tauxSalTrB;
    }

    /**
     * Set the taux sal tr b.
     *
     * @param float $tauxSalTrB The taux sal tr b.
     */
    public function setTauxSalTrB($tauxSalTrB) {
        $this->tauxSalTrB = $tauxSalTrB;
        return $this;
    }
}
