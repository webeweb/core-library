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
 * Designation3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignation3Trait {

    /**
     * Designation3.
     *
     * @var string
     */
    private $designation3;

    /**
     * Get the designation3.
     *
     * @return string Returns the designation3.
     */
    public function getDesignation3() {
        return $this->designation3;
    }

    /**
     * Set the designation3.
     *
     * @param string $designation3 The designation3.
     */
    public function setDesignation3($designation3) {
        $this->designation3 = $designation3;
        return $this;
    }
}
