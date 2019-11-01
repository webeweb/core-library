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
 * Sous categorie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSousCategorieTrait {

    /**
     * Sous categorie.
     *
     * @var string
     */
    private $sousCategorie;

    /**
     * Get the sous categorie.
     *
     * @return string Returns the sous categorie.
     */
    public function getSousCategorie() {
        return $this->sousCategorie;
    }

    /**
     * Set the sous categorie.
     *
     * @param string $sousCategorie The sous categorie.
     */
    public function setSousCategorie($sousCategorie) {
        $this->sousCategorie = $sousCategorie;
        return $this;
    }
}
