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
 * Ancien garp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAncienGarpTrait {

    /**
     * Ancien garp.
     *
     * @var bool
     */
    private $ancienGarp;

    /**
     * Get the ancien garp.
     *
     * @return bool Returns the ancien garp.
     */
    public function getAncienGarp() {
        return $this->ancienGarp;
    }

    /**
     * Set the ancien garp.
     *
     * @param bool $ancienGarp The ancien garp.
     */
    public function setAncienGarp($ancienGarp) {
        $this->ancienGarp = $ancienGarp;
        return $this;
    }
}
