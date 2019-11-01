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
 * H sup2 structurelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHSup2StructurelleTrait {

    /**
     * H sup2 structurelle.
     *
     * @var bool
     */
    private $hSup2Structurelle;

    /**
     * Get the h sup2 structurelle.
     *
     * @return bool Returns the h sup2 structurelle.
     */
    public function getHSup2Structurelle() {
        return $this->hSup2Structurelle;
    }

    /**
     * Set the h sup2 structurelle.
     *
     * @param bool $hSup2Structurelle The h sup2 structurelle.
     */
    public function setHSup2Structurelle($hSup2Structurelle) {
        $this->hSup2Structurelle = $hSup2Structurelle;
        return $this;
    }
}
