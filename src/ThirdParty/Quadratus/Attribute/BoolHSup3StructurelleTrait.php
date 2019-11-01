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
 * H sup3 structurelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHSup3StructurelleTrait {

    /**
     * H sup3 structurelle.
     *
     * @var bool
     */
    private $hSup3Structurelle;

    /**
     * Get the h sup3 structurelle.
     *
     * @return bool Returns the h sup3 structurelle.
     */
    public function getHSup3Structurelle() {
        return $this->hSup3Structurelle;
    }

    /**
     * Set the h sup3 structurelle.
     *
     * @param bool $hSup3Structurelle The h sup3 structurelle.
     */
    public function setHSup3Structurelle($hSup3Structurelle) {
        $this->hSup3Structurelle = $hSup3Structurelle;
        return $this;
    }
}
