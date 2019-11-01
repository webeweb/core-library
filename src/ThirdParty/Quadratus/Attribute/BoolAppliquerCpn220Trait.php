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
 * Appliquer cpn220 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAppliquerCpn220Trait {

    /**
     * Appliquer cpn220.
     *
     * @var bool
     */
    private $appliquerCpn220;

    /**
     * Get the appliquer cpn220.
     *
     * @return bool Returns the appliquer cpn220.
     */
    public function getAppliquerCpn220() {
        return $this->appliquerCpn220;
    }

    /**
     * Set the appliquer cpn220.
     *
     * @param bool $appliquerCpn220 The appliquer cpn220.
     */
    public function setAppliquerCpn220($appliquerCpn220) {
        $this->appliquerCpn220 = $appliquerCpn220;
        return $this;
    }
}
