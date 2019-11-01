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
 * Tepa moins20 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTepaMoins20Trait {

    /**
     * Tepa moins20.
     *
     * @var bool
     */
    private $tepaMoins20;

    /**
     * Get the tepa moins20.
     *
     * @return bool Returns the tepa moins20.
     */
    public function getTepaMoins20() {
        return $this->tepaMoins20;
    }

    /**
     * Set the tepa moins20.
     *
     * @param bool $tepaMoins20 The tepa moins20.
     */
    public function setTepaMoins20($tepaMoins20) {
        $this->tepaMoins20 = $tepaMoins20;
        return $this;
    }
}
