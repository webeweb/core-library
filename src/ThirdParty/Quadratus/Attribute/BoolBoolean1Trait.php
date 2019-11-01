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
 * Boolean1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBoolean1Trait {

    /**
     * Boolean1.
     *
     * @var bool
     */
    private $boolean1;

    /**
     * Get the boolean1.
     *
     * @return bool Returns the boolean1.
     */
    public function getBoolean1() {
        return $this->boolean1;
    }

    /**
     * Set the boolean1.
     *
     * @param bool $boolean1 The boolean1.
     */
    public function setBoolean1($boolean1) {
        $this->boolean1 = $boolean1;
        return $this;
    }
}
