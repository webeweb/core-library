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
 * Long9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLong9Trait {

    /**
     * Long9.
     *
     * @var int
     */
    private $long9;

    /**
     * Get the long9.
     *
     * @return int Returns the long9.
     */
    public function getLong9() {
        return $this->long9;
    }

    /**
     * Set the long9.
     *
     * @param int $long9 The long9.
     */
    public function setLong9($long9) {
        $this->long9 = $long9;
        return $this;
    }
}
