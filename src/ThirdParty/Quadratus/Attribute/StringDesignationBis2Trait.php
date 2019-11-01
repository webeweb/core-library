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
 * Designation bis2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignationBis2Trait {

    /**
     * Designation bis2.
     *
     * @var string
     */
    private $designationBis2;

    /**
     * Get the designation bis2.
     *
     * @return string Returns the designation bis2.
     */
    public function getDesignationBis2() {
        return $this->designationBis2;
    }

    /**
     * Set the designation bis2.
     *
     * @param string $designationBis2 The designation bis2.
     */
    public function setDesignationBis2($designationBis2) {
        $this->designationBis2 = $designationBis2;
        return $this;
    }
}
