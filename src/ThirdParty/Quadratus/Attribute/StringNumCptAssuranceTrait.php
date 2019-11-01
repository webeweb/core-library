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
 * Num cpt assurance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptAssuranceTrait {

    /**
     * Num cpt assurance.
     *
     * @var string
     */
    private $numCptAssurance;

    /**
     * Get the num cpt assurance.
     *
     * @return string Returns the num cpt assurance.
     */
    public function getNumCptAssurance() {
        return $this->numCptAssurance;
    }

    /**
     * Set the num cpt assurance.
     *
     * @param string $numCptAssurance The num cpt assurance.
     */
    public function setNumCptAssurance($numCptAssurance) {
        $this->numCptAssurance = $numCptAssurance;
        return $this;
    }
}
