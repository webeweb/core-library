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
 * H sup structurelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHSupStructurelleTrait {

    /**
     * H sup structurelle.
     *
     * @var bool
     */
    private $hSupStructurelle;

    /**
     * Get the h sup structurelle.
     *
     * @return bool Returns the h sup structurelle.
     */
    public function getHSupStructurelle() {
        return $this->hSupStructurelle;
    }

    /**
     * Set the h sup structurelle.
     *
     * @param bool $hSupStructurelle The h sup structurelle.
     */
    public function setHSupStructurelle($hSupStructurelle) {
        $this->hSupStructurelle = $hSupStructurelle;
        return $this;
    }
}
