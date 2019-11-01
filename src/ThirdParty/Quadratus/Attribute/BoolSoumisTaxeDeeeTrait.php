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
 * Soumis taxe deee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisTaxeDeeeTrait {

    /**
     * Soumis taxe deee.
     *
     * @var bool
     */
    private $soumisTaxeDeee;

    /**
     * Get the soumis taxe deee.
     *
     * @return bool Returns the soumis taxe deee.
     */
    public function getSoumisTaxeDeee() {
        return $this->soumisTaxeDeee;
    }

    /**
     * Set the soumis taxe deee.
     *
     * @param bool $soumisTaxeDeee The soumis taxe deee.
     */
    public function setSoumisTaxeDeee($soumisTaxeDeee) {
        $this->soumisTaxeDeee = $soumisTaxeDeee;
        return $this;
    }
}
