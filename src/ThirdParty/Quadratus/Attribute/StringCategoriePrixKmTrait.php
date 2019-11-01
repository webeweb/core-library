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
 * Categorie prix km trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCategoriePrixKmTrait {

    /**
     * Categorie prix km.
     *
     * @var string
     */
    private $categoriePrixKm;

    /**
     * Get the categorie prix km.
     *
     * @return string Returns the categorie prix km.
     */
    public function getCategoriePrixKm() {
        return $this->categoriePrixKm;
    }

    /**
     * Set the categorie prix km.
     *
     * @param string $categoriePrixKm The categorie prix km.
     */
    public function setCategoriePrixKm($categoriePrixKm) {
        $this->categoriePrixKm = $categoriePrixKm;
        return $this;
    }
}
