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
 * Acces tableaux bord trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesTableauxBordTrait {

    /**
     * Acces tableaux bord.
     *
     * @var bool
     */
    private $accesTableauxBord;

    /**
     * Get the acces tableaux bord.
     *
     * @return bool Returns the acces tableaux bord.
     */
    public function getAccesTableauxBord() {
        return $this->accesTableauxBord;
    }

    /**
     * Set the acces tableaux bord.
     *
     * @param bool $accesTableauxBord The acces tableaux bord.
     */
    public function setAccesTableauxBord($accesTableauxBord) {
        $this->accesTableauxBord = $accesTableauxBord;
        return $this;
    }
}
