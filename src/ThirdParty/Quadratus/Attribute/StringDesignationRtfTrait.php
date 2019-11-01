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
 * Designation rtf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignationRtfTrait {

    /**
     * Designation rtf.
     *
     * @var string
     */
    private $designationRtf;

    /**
     * Get the designation rtf.
     *
     * @return string Returns the designation rtf.
     */
    public function getDesignationRtf() {
        return $this->designationRtf;
    }

    /**
     * Set the designation rtf.
     *
     * @param string $designationRtf The designation rtf.
     */
    public function setDesignationRtf($designationRtf) {
        $this->designationRtf = $designationRtf;
        return $this;
    }
}
