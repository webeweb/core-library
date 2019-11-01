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
 * Boolean7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBoolean7Trait {

    /**
     * Boolean7.
     *
     * @var bool
     */
    private $boolean7;

    /**
     * Get the boolean7.
     *
     * @return bool Returns the boolean7.
     */
    public function getBoolean7() {
        return $this->boolean7;
    }

    /**
     * Set the boolean7.
     *
     * @param bool $boolean7 The boolean7.
     */
    public function setBoolean7($boolean7) {
        $this->boolean7 = $boolean7;
        return $this;
    }
}
