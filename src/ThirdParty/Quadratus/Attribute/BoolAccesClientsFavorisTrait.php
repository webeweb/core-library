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
 * Acces clients favoris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesClientsFavorisTrait {

    /**
     * Acces clients favoris.
     *
     * @var bool
     */
    private $accesClientsFavoris;

    /**
     * Get the acces clients favoris.
     *
     * @return bool Returns the acces clients favoris.
     */
    public function getAccesClientsFavoris() {
        return $this->accesClientsFavoris;
    }

    /**
     * Set the acces clients favoris.
     *
     * @param bool $accesClientsFavoris The acces clients favoris.
     */
    public function setAccesClientsFavoris($accesClientsFavoris) {
        $this->accesClientsFavoris = $accesClientsFavoris;
        return $this;
    }
}
