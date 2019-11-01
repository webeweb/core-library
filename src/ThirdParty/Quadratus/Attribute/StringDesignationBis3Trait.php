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
 * Designation bis3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignationBis3Trait {

    /**
     * Designation bis3.
     *
     * @var string
     */
    private $designationBis3;

    /**
     * Get the designation bis3.
     *
     * @return string Returns the designation bis3.
     */
    public function getDesignationBis3() {
        return $this->designationBis3;
    }

    /**
     * Set the designation bis3.
     *
     * @param string $designationBis3 The designation bis3.
     */
    public function setDesignationBis3($designationBis3) {
        $this->designationBis3 = $designationBis3;
        return $this;
    }
}
