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
 * Type prep dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypePrepDadsuTrait {

    /**
     * Type prep dadsu.
     *
     * @var string
     */
    private $typePrepDadsu;

    /**
     * Get the type prep dadsu.
     *
     * @return string Returns the type prep dadsu.
     */
    public function getTypePrepDadsu() {
        return $this->typePrepDadsu;
    }

    /**
     * Set the type prep dadsu.
     *
     * @param string $typePrepDadsu The type prep dadsu.
     */
    public function setTypePrepDadsu($typePrepDadsu) {
        $this->typePrepDadsu = $typePrepDadsu;
        return $this;
    }
}
