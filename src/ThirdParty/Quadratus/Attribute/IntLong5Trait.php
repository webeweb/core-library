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
 * Long5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLong5Trait {

    /**
     * Long5.
     *
     * @var int
     */
    private $long5;

    /**
     * Get the long5.
     *
     * @return int Returns the long5.
     */
    public function getLong5() {
        return $this->long5;
    }

    /**
     * Set the long5.
     *
     * @param int $long5 The long5.
     */
    public function setLong5($long5) {
        $this->long5 = $long5;
        return $this;
    }
}
