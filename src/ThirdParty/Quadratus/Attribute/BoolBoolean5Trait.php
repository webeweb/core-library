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
 * Boolean5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBoolean5Trait {

    /**
     * Boolean5.
     *
     * @var bool
     */
    private $boolean5;

    /**
     * Get the boolean5.
     *
     * @return bool Returns the boolean5.
     */
    public function getBoolean5() {
        return $this->boolean5;
    }

    /**
     * Set the boolean5.
     *
     * @param bool $boolean5 The boolean5.
     */
    public function setBoolean5($boolean5) {
        $this->boolean5 = $boolean5;
        return $this;
    }
}
