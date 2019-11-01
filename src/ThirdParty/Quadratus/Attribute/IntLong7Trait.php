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
 * Long7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLong7Trait {

    /**
     * Long7.
     *
     * @var int
     */
    private $long7;

    /**
     * Get the long7.
     *
     * @return int Returns the long7.
     */
    public function getLong7() {
        return $this->long7;
    }

    /**
     * Set the long7.
     *
     * @param int $long7 The long7.
     */
    public function setLong7($long7) {
        $this->long7 = $long7;
        return $this;
    }
}
