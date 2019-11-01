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
 * Designation commerciale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignationCommercialeTrait {

    /**
     * Designation commerciale.
     *
     * @var string
     */
    private $designationCommerciale;

    /**
     * Get the designation commerciale.
     *
     * @return string Returns the designation commerciale.
     */
    public function getDesignationCommerciale() {
        return $this->designationCommerciale;
    }

    /**
     * Set the designation commerciale.
     *
     * @param string $designationCommerciale The designation commerciale.
     */
    public function setDesignationCommerciale($designationCommerciale) {
        $this->designationCommerciale = $designationCommerciale;
        return $this;
    }
}
