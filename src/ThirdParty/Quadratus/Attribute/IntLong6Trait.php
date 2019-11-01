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
 * Long6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLong6Trait {

    /**
     * Long6.
     *
     * @var int
     */
    private $long6;

    /**
     * Get the long6.
     *
     * @return int Returns the long6.
     */
    public function getLong6() {
        return $this->long6;
    }

    /**
     * Set the long6.
     *
     * @param int $long6 The long6.
     */
    public function setLong6($long6) {
        $this->long6 = $long6;
        return $this;
    }
}
