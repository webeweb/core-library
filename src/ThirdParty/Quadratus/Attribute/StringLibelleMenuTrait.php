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
 * Libelle menu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleMenuTrait {

    /**
     * Libelle menu.
     *
     * @var string
     */
    private $libelleMenu;

    /**
     * Get the libelle menu.
     *
     * @return string Returns the libelle menu.
     */
    public function getLibelleMenu() {
        return $this->libelleMenu;
    }

    /**
     * Set the libelle menu.
     *
     * @param string $libelleMenu The libelle menu.
     */
    public function setLibelleMenu($libelleMenu) {
        $this->libelleMenu = $libelleMenu;
        return $this;
    }
}
