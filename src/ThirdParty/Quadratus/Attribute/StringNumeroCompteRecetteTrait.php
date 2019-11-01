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
 * Numero compte recette trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroCompteRecetteTrait {

    /**
     * Numero compte recette.
     *
     * @var string
     */
    private $numeroCompteRecette;

    /**
     * Get the numero compte recette.
     *
     * @return string Returns the numero compte recette.
     */
    public function getNumeroCompteRecette() {
        return $this->numeroCompteRecette;
    }

    /**
     * Set the numero compte recette.
     *
     * @param string $numeroCompteRecette The numero compte recette.
     */
    public function setNumeroCompteRecette($numeroCompteRecette) {
        $this->numeroCompteRecette = $numeroCompteRecette;
        return $this;
    }
}
