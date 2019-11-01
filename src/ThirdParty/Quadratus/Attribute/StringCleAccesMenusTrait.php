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
 * Cle acces menus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAccesMenusTrait {

    /**
     * Cle acces menus.
     *
     * @var string
     */
    private $cleAccesMenus;

    /**
     * Get the cle acces menus.
     *
     * @return string Returns the cle acces menus.
     */
    public function getCleAccesMenus() {
        return $this->cleAccesMenus;
    }

    /**
     * Set the cle acces menus.
     *
     * @param string $cleAccesMenus The cle acces menus.
     */
    public function setCleAccesMenus($cleAccesMenus) {
        $this->cleAccesMenus = $cleAccesMenus;
        return $this;
    }
}
