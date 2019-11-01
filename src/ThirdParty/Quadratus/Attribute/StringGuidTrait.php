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
 * Guid trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGuidTrait {

    /**
     * Guid.
     *
     * @var string
     */
    private $guid;

    /**
     * Get the guid.
     *
     * @return string Returns the guid.
     */
    public function getGuid() {
        return $this->guid;
    }

    /**
     * Set the guid.
     *
     * @param string $guid The guid.
     */
    public function setGuid($guid) {
        $this->guid = $guid;
        return $this;
    }
}
