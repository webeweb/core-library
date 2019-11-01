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
 * Depuis calcul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDepuisCalculTrait {

    /**
     * Depuis calcul.
     *
     * @var bool
     */
    private $depuisCalcul;

    /**
     * Get the depuis calcul.
     *
     * @return bool Returns the depuis calcul.
     */
    public function getDepuisCalcul() {
        return $this->depuisCalcul;
    }

    /**
     * Set the depuis calcul.
     *
     * @param bool $depuisCalcul The depuis calcul.
     */
    public function setDepuisCalcul($depuisCalcul) {
        $this->depuisCalcul = $depuisCalcul;
        return $this;
    }
}
