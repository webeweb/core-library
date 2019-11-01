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
 * Base non exoneree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBaseNonExonereeTrait {

    /**
     * Base non exoneree.
     *
     * @var bool
     */
    private $baseNonExoneree;

    /**
     * Get the base non exoneree.
     *
     * @return bool Returns the base non exoneree.
     */
    public function getBaseNonExoneree() {
        return $this->baseNonExoneree;
    }

    /**
     * Set the base non exoneree.
     *
     * @param bool $baseNonExoneree The base non exoneree.
     */
    public function setBaseNonExoneree($baseNonExoneree) {
        $this->baseNonExoneree = $baseNonExoneree;
        return $this;
    }
}
