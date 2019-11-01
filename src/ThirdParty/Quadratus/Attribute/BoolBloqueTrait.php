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
 * Bloque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBloqueTrait {

    /**
     * Bloque.
     *
     * @var bool
     */
    private $bloque;

    /**
     * Get the bloque.
     *
     * @return bool Returns the bloque.
     */
    public function getBloque() {
        return $this->bloque;
    }

    /**
     * Set the bloque.
     *
     * @param bool $bloque The bloque.
     */
    public function setBloque($bloque) {
        $this->bloque = $bloque;
        return $this;
    }
}
