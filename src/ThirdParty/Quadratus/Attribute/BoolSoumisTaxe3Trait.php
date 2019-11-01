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
 * Soumis taxe3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisTaxe3Trait {

    /**
     * Soumis taxe3.
     *
     * @var bool
     */
    private $soumisTaxe3;

    /**
     * Get the soumis taxe3.
     *
     * @return bool Returns the soumis taxe3.
     */
    public function getSoumisTaxe3() {
        return $this->soumisTaxe3;
    }

    /**
     * Set the soumis taxe3.
     *
     * @param bool $soumisTaxe3 The soumis taxe3.
     */
    public function setSoumisTaxe3($soumisTaxe3) {
        $this->soumisTaxe3 = $soumisTaxe3;
        return $this;
    }
}
