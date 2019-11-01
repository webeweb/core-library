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
 * Designation apres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignationApresTrait {

    /**
     * Designation apres.
     *
     * @var string
     */
    private $designationApres;

    /**
     * Get the designation apres.
     *
     * @return string Returns the designation apres.
     */
    public function getDesignationApres() {
        return $this->designationApres;
    }

    /**
     * Set the designation apres.
     *
     * @param string $designationApres The designation apres.
     */
    public function setDesignationApres($designationApres) {
        $this->designationApres = $designationApres;
        return $this;
    }
}
