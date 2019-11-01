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
 * Boolean4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBoolean4Trait {

    /**
     * Boolean4.
     *
     * @var bool
     */
    private $boolean4;

    /**
     * Get the boolean4.
     *
     * @return bool Returns the boolean4.
     */
    public function getBoolean4() {
        return $this->boolean4;
    }

    /**
     * Set the boolean4.
     *
     * @param bool $boolean4 The boolean4.
     */
    public function setBoolean4($boolean4) {
        $this->boolean4 = $boolean4;
        return $this;
    }
}
