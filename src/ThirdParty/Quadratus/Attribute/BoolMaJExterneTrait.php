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
 * Ma j externe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMaJExterneTrait {

    /**
     * Ma j externe.
     *
     * @var bool
     */
    private $maJExterne;

    /**
     * Get the ma j externe.
     *
     * @return bool Returns the ma j externe.
     */
    public function getMaJExterne() {
        return $this->maJExterne;
    }

    /**
     * Set the ma j externe.
     *
     * @param bool $maJExterne The ma j externe.
     */
    public function setMaJExterne($maJExterne) {
        $this->maJExterne = $maJExterne;
        return $this;
    }
}
