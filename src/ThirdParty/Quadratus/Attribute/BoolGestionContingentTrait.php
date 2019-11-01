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
 * Gestion contingent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionContingentTrait {

    /**
     * Gestion contingent.
     *
     * @var bool
     */
    private $gestionContingent;

    /**
     * Get the gestion contingent.
     *
     * @return bool Returns the gestion contingent.
     */
    public function getGestionContingent() {
        return $this->gestionContingent;
    }

    /**
     * Set the gestion contingent.
     *
     * @param bool $gestionContingent The gestion contingent.
     */
    public function setGestionContingent($gestionContingent) {
        $this->gestionContingent = $gestionContingent;
        return $this;
    }
}
