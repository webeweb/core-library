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
 * Taux salarial dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxSalarialDadsuTrait {

    /**
     * Taux salarial dadsu.
     *
     * @var float
     */
    private $tauxSalarialDadsu;

    /**
     * Get the taux salarial dadsu.
     *
     * @return float Returns the taux salarial dadsu.
     */
    public function getTauxSalarialDadsu() {
        return $this->tauxSalarialDadsu;
    }

    /**
     * Set the taux salarial dadsu.
     *
     * @param float $tauxSalarialDadsu The taux salarial dadsu.
     */
    public function setTauxSalarialDadsu($tauxSalarialDadsu) {
        $this->tauxSalarialDadsu = $tauxSalarialDadsu;
        return $this;
    }
}
