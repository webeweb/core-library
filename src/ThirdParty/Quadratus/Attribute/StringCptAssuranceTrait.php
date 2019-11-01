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
 * Cpt assurance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptAssuranceTrait {

    /**
     * Cpt assurance.
     *
     * @var string
     */
    private $cptAssurance;

    /**
     * Get the cpt assurance.
     *
     * @return string Returns the cpt assurance.
     */
    public function getCptAssurance() {
        return $this->cptAssurance;
    }

    /**
     * Set the cpt assurance.
     *
     * @param string $cptAssurance The cpt assurance.
     */
    public function setCptAssurance($cptAssurance) {
        $this->cptAssurance = $cptAssurance;
        return $this;
    }
}
