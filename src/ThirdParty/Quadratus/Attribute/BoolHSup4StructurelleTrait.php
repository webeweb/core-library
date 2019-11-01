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
 * H sup4 structurelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHSup4StructurelleTrait {

    /**
     * H sup4 structurelle.
     *
     * @var bool
     */
    private $hSup4Structurelle;

    /**
     * Get the h sup4 structurelle.
     *
     * @return bool Returns the h sup4 structurelle.
     */
    public function getHSup4Structurelle() {
        return $this->hSup4Structurelle;
    }

    /**
     * Set the h sup4 structurelle.
     *
     * @param bool $hSup4Structurelle The h sup4 structurelle.
     */
    public function setHSup4Structurelle($hSup4Structurelle) {
        $this->hSup4Structurelle = $hSup4Structurelle;
        return $this;
    }
}
