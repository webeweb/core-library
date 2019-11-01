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
 * Long10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLong10Trait {

    /**
     * Long10.
     *
     * @var int
     */
    private $long10;

    /**
     * Get the long10.
     *
     * @return int Returns the long10.
     */
    public function getLong10() {
        return $this->long10;
    }

    /**
     * Set the long10.
     *
     * @param int $long10 The long10.
     */
    public function setLong10($long10) {
        $this->long10 = $long10;
        return $this;
    }
}
