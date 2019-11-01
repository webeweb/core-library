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
 * Long1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLong1Trait {

    /**
     * Long1.
     *
     * @var int
     */
    private $long1;

    /**
     * Get the long1.
     *
     * @return int Returns the long1.
     */
    public function getLong1() {
        return $this->long1;
    }

    /**
     * Set the long1.
     *
     * @param int $long1 The long1.
     */
    public function setLong1($long1) {
        $this->long1 = $long1;
        return $this;
    }
}
