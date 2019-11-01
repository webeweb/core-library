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
 * Optique ducs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOptiqueDucsTrait {

    /**
     * Optique ducs.
     *
     * @var string
     */
    private $optiqueDucs;

    /**
     * Get the optique ducs.
     *
     * @return string Returns the optique ducs.
     */
    public function getOptiqueDucs() {
        return $this->optiqueDucs;
    }

    /**
     * Set the optique ducs.
     *
     * @param string $optiqueDucs The optique ducs.
     */
    public function setOptiqueDucs($optiqueDucs) {
        $this->optiqueDucs = $optiqueDucs;
        return $this;
    }
}
