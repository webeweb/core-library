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
 * Taux doute deb exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxDouteDebExoTrait {

    /**
     * Taux doute deb exo.
     *
     * @var float
     */
    private $tauxDouteDebExo;

    /**
     * Get the taux doute deb exo.
     *
     * @return float Returns the taux doute deb exo.
     */
    public function getTauxDouteDebExo() {
        return $this->tauxDouteDebExo;
    }

    /**
     * Set the taux doute deb exo.
     *
     * @param float $tauxDouteDebExo The taux doute deb exo.
     */
    public function setTauxDouteDebExo($tauxDouteDebExo) {
        $this->tauxDouteDebExo = $tauxDouteDebExo;
        return $this;
    }
}
