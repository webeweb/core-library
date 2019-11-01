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
 * Designation2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignation2Trait {

    /**
     * Designation2.
     *
     * @var string
     */
    private $designation2;

    /**
     * Get the designation2.
     *
     * @return string Returns the designation2.
     */
    public function getDesignation2() {
        return $this->designation2;
    }

    /**
     * Set the designation2.
     *
     * @param string $designation2 The designation2.
     */
    public function setDesignation2($designation2) {
        $this->designation2 = $designation2;
        return $this;
    }
}
