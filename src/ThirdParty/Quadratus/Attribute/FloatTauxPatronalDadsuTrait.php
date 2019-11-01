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
 * Taux patronal dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPatronalDadsuTrait {

    /**
     * Taux patronal dadsu.
     *
     * @var float
     */
    private $tauxPatronalDadsu;

    /**
     * Get the taux patronal dadsu.
     *
     * @return float Returns the taux patronal dadsu.
     */
    public function getTauxPatronalDadsu() {
        return $this->tauxPatronalDadsu;
    }

    /**
     * Set the taux patronal dadsu.
     *
     * @param float $tauxPatronalDadsu The taux patronal dadsu.
     */
    public function setTauxPatronalDadsu($tauxPatronalDadsu) {
        $this->tauxPatronalDadsu = $tauxPatronalDadsu;
        return $this;
    }
}
