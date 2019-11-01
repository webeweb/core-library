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
 * Designation1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignation1Trait {

    /**
     * Designation1.
     *
     * @var string
     */
    private $designation1;

    /**
     * Get the designation1.
     *
     * @return string Returns the designation1.
     */
    public function getDesignation1() {
        return $this->designation1;
    }

    /**
     * Set the designation1.
     *
     * @param string $designation1 The designation1.
     */
    public function setDesignation1($designation1) {
        $this->designation1 = $designation1;
        return $this;
    }
}
