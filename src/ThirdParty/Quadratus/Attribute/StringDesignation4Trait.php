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
 * Designation4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignation4Trait {

    /**
     * Designation4.
     *
     * @var string
     */
    private $designation4;

    /**
     * Get the designation4.
     *
     * @return string Returns the designation4.
     */
    public function getDesignation4() {
        return $this->designation4;
    }

    /**
     * Set the designation4.
     *
     * @param string $designation4 The designation4.
     */
    public function setDesignation4($designation4) {
        $this->designation4 = $designation4;
        return $this;
    }
}
