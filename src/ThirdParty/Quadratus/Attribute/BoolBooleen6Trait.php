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
 * Booleen6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBooleen6Trait {

    /**
     * Booleen6.
     *
     * @var bool
     */
    private $booleen6;

    /**
     * Get the booleen6.
     *
     * @return bool Returns the booleen6.
     */
    public function getBooleen6() {
        return $this->booleen6;
    }

    /**
     * Set the booleen6.
     *
     * @param bool $booleen6 The booleen6.
     */
    public function setBooleen6($booleen6) {
        $this->booleen6 = $booleen6;
        return $this;
    }
}
