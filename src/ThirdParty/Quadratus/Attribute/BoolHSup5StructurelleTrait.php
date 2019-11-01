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
 * H sup5 structurelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHSup5StructurelleTrait {

    /**
     * H sup5 structurelle.
     *
     * @var bool
     */
    private $hSup5Structurelle;

    /**
     * Get the h sup5 structurelle.
     *
     * @return bool Returns the h sup5 structurelle.
     */
    public function getHSup5Structurelle() {
        return $this->hSup5Structurelle;
    }

    /**
     * Set the h sup5 structurelle.
     *
     * @param bool $hSup5Structurelle The h sup5 structurelle.
     */
    public function setHSup5Structurelle($hSup5Structurelle) {
        $this->hSup5Structurelle = $hSup5Structurelle;
        return $this;
    }
}
