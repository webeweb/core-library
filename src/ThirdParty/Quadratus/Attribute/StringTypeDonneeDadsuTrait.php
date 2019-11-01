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
 * Type donnee dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDonneeDadsuTrait {

    /**
     * Type donnee dadsu.
     *
     * @var string
     */
    private $typeDonneeDadsu;

    /**
     * Get the type donnee dadsu.
     *
     * @return string Returns the type donnee dadsu.
     */
    public function getTypeDonneeDadsu() {
        return $this->typeDonneeDadsu;
    }

    /**
     * Set the type donnee dadsu.
     *
     * @param string $typeDonneeDadsu The type donnee dadsu.
     */
    public function setTypeDonneeDadsu($typeDonneeDadsu) {
        $this->typeDonneeDadsu = $typeDonneeDadsu;
        return $this;
    }
}
