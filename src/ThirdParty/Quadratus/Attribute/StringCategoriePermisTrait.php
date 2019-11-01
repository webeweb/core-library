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
 * Categorie permis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCategoriePermisTrait {

    /**
     * Categorie permis.
     *
     * @var string
     */
    private $categoriePermis;

    /**
     * Get the categorie permis.
     *
     * @return string Returns the categorie permis.
     */
    public function getCategoriePermis() {
        return $this->categoriePermis;
    }

    /**
     * Set the categorie permis.
     *
     * @param string $categoriePermis The categorie permis.
     */
    public function setCategoriePermis($categoriePermis) {
        $this->categoriePermis = $categoriePermis;
        return $this;
    }
}
