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
 * Long4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLong4Trait {

    /**
     * Long4.
     *
     * @var int
     */
    private $long4;

    /**
     * Get the long4.
     *
     * @return int Returns the long4.
     */
    public function getLong4() {
        return $this->long4;
    }

    /**
     * Set the long4.
     *
     * @param int $long4 The long4.
     */
    public function setLong4($long4) {
        $this->long4 = $long4;
        return $this;
    }
}
