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
 * Long3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLong3Trait {

    /**
     * Long3.
     *
     * @var int
     */
    private $long3;

    /**
     * Get the long3.
     *
     * @return int Returns the long3.
     */
    public function getLong3() {
        return $this->long3;
    }

    /**
     * Set the long3.
     *
     * @param int $long3 The long3.
     */
    public function setLong3($long3) {
        $this->long3 = $long3;
        return $this;
    }
}
