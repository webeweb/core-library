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
 * Permanent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPermanentTrait {

    /**
     * Permanent.
     *
     * @var bool
     */
    private $permanent;

    /**
     * Get the permanent.
     *
     * @return bool Returns the permanent.
     */
    public function getPermanent() {
        return $this->permanent;
    }

    /**
     * Set the permanent.
     *
     * @param bool $permanent The permanent.
     */
    public function setPermanent($permanent) {
        $this->permanent = $permanent;
        return $this;
    }
}
