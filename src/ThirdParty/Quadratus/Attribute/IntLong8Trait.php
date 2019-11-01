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
 * Long8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLong8Trait {

    /**
     * Long8.
     *
     * @var int
     */
    private $long8;

    /**
     * Get the long8.
     *
     * @return int Returns the long8.
     */
    public function getLong8() {
        return $this->long8;
    }

    /**
     * Set the long8.
     *
     * @param int $long8 The long8.
     */
    public function setLong8($long8) {
        $this->long8 = $long8;
        return $this;
    }
}
