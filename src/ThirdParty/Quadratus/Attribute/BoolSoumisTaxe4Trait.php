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
 * Soumis taxe4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisTaxe4Trait {

    /**
     * Soumis taxe4.
     *
     * @var bool
     */
    private $soumisTaxe4;

    /**
     * Get the soumis taxe4.
     *
     * @return bool Returns the soumis taxe4.
     */
    public function getSoumisTaxe4() {
        return $this->soumisTaxe4;
    }

    /**
     * Set the soumis taxe4.
     *
     * @param bool $soumisTaxe4 The soumis taxe4.
     */
    public function setSoumisTaxe4($soumisTaxe4) {
        $this->soumisTaxe4 = $soumisTaxe4;
        return $this;
    }
}
