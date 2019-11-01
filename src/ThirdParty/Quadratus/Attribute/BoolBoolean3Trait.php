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
 * Boolean3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBoolean3Trait {

    /**
     * Boolean3.
     *
     * @var bool
     */
    private $boolean3;

    /**
     * Get the boolean3.
     *
     * @return bool Returns the boolean3.
     */
    public function getBoolean3() {
        return $this->boolean3;
    }

    /**
     * Set the boolean3.
     *
     * @param bool $boolean3 The boolean3.
     */
    public function setBoolean3($boolean3) {
        $this->boolean3 = $boolean3;
        return $this;
    }
}
