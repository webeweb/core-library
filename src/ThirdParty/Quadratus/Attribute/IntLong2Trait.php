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
 * Long2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLong2Trait {

    /**
     * Long2.
     *
     * @var int
     */
    private $long2;

    /**
     * Get the long2.
     *
     * @return int Returns the long2.
     */
    public function getLong2() {
        return $this->long2;
    }

    /**
     * Set the long2.
     *
     * @param int $long2 The long2.
     */
    public function setLong2($long2) {
        $this->long2 = $long2;
        return $this;
    }
}
