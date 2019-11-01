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
 * Nom menu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomMenuTrait {

    /**
     * Nom menu.
     *
     * @var string
     */
    private $nomMenu;

    /**
     * Get the nom menu.
     *
     * @return string Returns the nom menu.
     */
    public function getNomMenu() {
        return $this->nomMenu;
    }

    /**
     * Set the nom menu.
     *
     * @param string $nomMenu The nom menu.
     */
    public function setNomMenu($nomMenu) {
        $this->nomMenu = $nomMenu;
        return $this;
    }
}
