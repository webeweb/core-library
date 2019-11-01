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
 * Categorie pme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCategoriePmeTrait {

    /**
     * Categorie pme.
     *
     * @var int
     */
    private $categoriePme;

    /**
     * Get the categorie pme.
     *
     * @return int Returns the categorie pme.
     */
    public function getCategoriePme() {
        return $this->categoriePme;
    }

    /**
     * Set the categorie pme.
     *
     * @param int $categoriePme The categorie pme.
     */
    public function setCategoriePme($categoriePme) {
        $this->categoriePme = $categoriePme;
        return $this;
    }
}
