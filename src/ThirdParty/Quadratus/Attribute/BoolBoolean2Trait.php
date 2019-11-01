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
 * Boolean2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBoolean2Trait {

    /**
     * Boolean2.
     *
     * @var bool
     */
    private $boolean2;

    /**
     * Get the boolean2.
     *
     * @return bool Returns the boolean2.
     */
    public function getBoolean2() {
        return $this->boolean2;
    }

    /**
     * Set the boolean2.
     *
     * @param bool $boolean2 The boolean2.
     */
    public function setBoolean2($boolean2) {
        $this->boolean2 = $boolean2;
        return $this;
    }
}
