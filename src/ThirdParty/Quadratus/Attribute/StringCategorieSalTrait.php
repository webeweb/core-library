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
 * Categorie sal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCategorieSalTrait {

    /**
     * Categorie sal.
     *
     * @var string
     */
    private $categorieSal;

    /**
     * Get the categorie sal.
     *
     * @return string Returns the categorie sal.
     */
    public function getCategorieSal() {
        return $this->categorieSal;
    }

    /**
     * Set the categorie sal.
     *
     * @param string $categorieSal The categorie sal.
     */
    public function setCategorieSal($categorieSal) {
        $this->categorieSal = $categorieSal;
        return $this;
    }
}
