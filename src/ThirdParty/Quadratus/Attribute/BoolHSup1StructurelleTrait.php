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
 * H sup1 structurelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHSup1StructurelleTrait {

    /**
     * H sup1 structurelle.
     *
     * @var bool
     */
    private $hSup1Structurelle;

    /**
     * Get the h sup1 structurelle.
     *
     * @return bool Returns the h sup1 structurelle.
     */
    public function getHSup1Structurelle() {
        return $this->hSup1Structurelle;
    }

    /**
     * Set the h sup1 structurelle.
     *
     * @param bool $hSup1Structurelle The h sup1 structurelle.
     */
    public function setHSup1Structurelle($hSup1Structurelle) {
        $this->hSup1Structurelle = $hSup1Structurelle;
        return $this;
    }
}
