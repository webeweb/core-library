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
 * Nom2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNom2Trait {

    /**
     * Nom2.
     *
     * @var string
     */
    private $nom2;

    /**
     * Get the nom2.
     *
     * @return string Returns the nom2.
     */
    public function getNom2() {
        return $this->nom2;
    }

    /**
     * Set the nom2.
     *
     * @param string $nom2 The nom2.
     */
    public function setNom2($nom2) {
        $this->nom2 = $nom2;
        return $this;
    }
}
