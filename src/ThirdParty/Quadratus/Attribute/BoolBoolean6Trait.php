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
 * Boolean6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBoolean6Trait {

    /**
     * Boolean6.
     *
     * @var bool
     */
    private $boolean6;

    /**
     * Get the boolean6.
     *
     * @return bool Returns the boolean6.
     */
    public function getBoolean6() {
        return $this->boolean6;
    }

    /**
     * Set the boolean6.
     *
     * @param bool $boolean6 The boolean6.
     */
    public function setBoolean6($boolean6) {
        $this->boolean6 = $boolean6;
        return $this;
    }
}
