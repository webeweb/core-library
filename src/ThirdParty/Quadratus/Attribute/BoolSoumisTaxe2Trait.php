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
 * Soumis taxe2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisTaxe2Trait {

    /**
     * Soumis taxe2.
     *
     * @var bool
     */
    private $soumisTaxe2;

    /**
     * Get the soumis taxe2.
     *
     * @return bool Returns the soumis taxe2.
     */
    public function getSoumisTaxe2() {
        return $this->soumisTaxe2;
    }

    /**
     * Set the soumis taxe2.
     *
     * @param bool $soumisTaxe2 The soumis taxe2.
     */
    public function setSoumisTaxe2($soumisTaxe2) {
        $this->soumisTaxe2 = $soumisTaxe2;
        return $this;
    }
}
