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
 * Base exoneree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBaseExonereeTrait {

    /**
     * Base exoneree.
     *
     * @var bool
     */
    private $baseExoneree;

    /**
     * Get the base exoneree.
     *
     * @return bool Returns the base exoneree.
     */
    public function getBaseExoneree() {
        return $this->baseExoneree;
    }

    /**
     * Set the base exoneree.
     *
     * @param bool $baseExoneree The base exoneree.
     */
    public function setBaseExoneree($baseExoneree) {
        $this->baseExoneree = $baseExoneree;
        return $this;
    }
}
