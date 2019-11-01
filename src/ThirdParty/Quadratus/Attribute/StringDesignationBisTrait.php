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
 * Designation bis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignationBisTrait {

    /**
     * Designation bis.
     *
     * @var string
     */
    private $designationBis;

    /**
     * Get the designation bis.
     *
     * @return string Returns the designation bis.
     */
    public function getDesignationBis() {
        return $this->designationBis;
    }

    /**
     * Set the designation bis.
     *
     * @param string $designationBis The designation bis.
     */
    public function setDesignationBis($designationBis) {
        $this->designationBis = $designationBis;
        return $this;
    }
}
