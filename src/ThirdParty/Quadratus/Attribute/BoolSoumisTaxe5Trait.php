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
 * Soumis taxe5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisTaxe5Trait {

    /**
     * Soumis taxe5.
     *
     * @var bool
     */
    private $soumisTaxe5;

    /**
     * Get the soumis taxe5.
     *
     * @return bool Returns the soumis taxe5.
     */
    public function getSoumisTaxe5() {
        return $this->soumisTaxe5;
    }

    /**
     * Set the soumis taxe5.
     *
     * @param bool $soumisTaxe5 The soumis taxe5.
     */
    public function setSoumisTaxe5($soumisTaxe5) {
        $this->soumisTaxe5 = $soumisTaxe5;
        return $this;
    }
}
