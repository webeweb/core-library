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
 * Taux doute exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxDouteExoTrait {

    /**
     * Taux doute exo.
     *
     * @var float
     */
    private $tauxDouteExo;

    /**
     * Get the taux doute exo.
     *
     * @return float Returns the taux doute exo.
     */
    public function getTauxDouteExo() {
        return $this->tauxDouteExo;
    }

    /**
     * Set the taux doute exo.
     *
     * @param float $tauxDouteExo The taux doute exo.
     */
    public function setTauxDouteExo($tauxDouteExo) {
        $this->tauxDouteExo = $tauxDouteExo;
        return $this;
    }
}
