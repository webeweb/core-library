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
 * Designation avant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignationAvantTrait {

    /**
     * Designation avant.
     *
     * @var string
     */
    private $designationAvant;

    /**
     * Get the designation avant.
     *
     * @return string Returns the designation avant.
     */
    public function getDesignationAvant() {
        return $this->designationAvant;
    }

    /**
     * Set the designation avant.
     *
     * @param string $designationAvant The designation avant.
     */
    public function setDesignationAvant($designationAvant) {
        $this->designationAvant = $designationAvant;
        return $this;
    }
}
