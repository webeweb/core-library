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
 * Jui trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolJuiTrait {

    /**
     * Jui.
     *
     * @var bool
     */
    private $jui;

    /**
     * Get the jui.
     *
     * @return bool Returns the jui.
     */
    public function getJui() {
        return $this->jui;
    }

    /**
     * Set the jui.
     *
     * @param bool $jui The jui.
     */
    public function setJui($jui) {
        $this->jui = $jui;
        return $this;
    }
}
