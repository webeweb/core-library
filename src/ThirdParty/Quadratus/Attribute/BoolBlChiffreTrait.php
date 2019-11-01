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
 * Bl chiffre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBlChiffreTrait {

    /**
     * Bl chiffre.
     *
     * @var bool
     */
    private $blChiffre;

    /**
     * Get the bl chiffre.
     *
     * @return bool Returns the bl chiffre.
     */
    public function getBlChiffre() {
        return $this->blChiffre;
    }

    /**
     * Set the bl chiffre.
     *
     * @param bool $blChiffre The bl chiffre.
     */
    public function setBlChiffre($blChiffre) {
        $this->blChiffre = $blChiffre;
        return $this;
    }
}
