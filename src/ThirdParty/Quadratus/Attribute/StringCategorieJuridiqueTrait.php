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
 * Categorie juridique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCategorieJuridiqueTrait {

    /**
     * Categorie juridique.
     *
     * @var string
     */
    private $categorieJuridique;

    /**
     * Get the categorie juridique.
     *
     * @return string Returns the categorie juridique.
     */
    public function getCategorieJuridique() {
        return $this->categorieJuridique;
    }

    /**
     * Set the categorie juridique.
     *
     * @param string $categorieJuridique The categorie juridique.
     */
    public function setCategorieJuridique($categorieJuridique) {
        $this->categorieJuridique = $categorieJuridique;
        return $this;
    }
}
