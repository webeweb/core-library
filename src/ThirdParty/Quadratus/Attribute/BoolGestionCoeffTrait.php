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
 * Gestion coeff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionCoeffTrait {

    /**
     * Gestion coeff.
     *
     * @var bool
     */
    private $gestionCoeff;

    /**
     * Get the gestion coeff.
     *
     * @return bool Returns the gestion coeff.
     */
    public function getGestionCoeff() {
        return $this->gestionCoeff;
    }

    /**
     * Set the gestion coeff.
     *
     * @param bool $gestionCoeff The gestion coeff.
     */
    public function setGestionCoeff($gestionCoeff) {
        $this->gestionCoeff = $gestionCoeff;
        return $this;
    }
}
