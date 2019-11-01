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
 * Gestion virement frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionVirementFrnTrait {

    /**
     * Gestion virement frn.
     *
     * @var bool
     */
    private $gestionVirementFrn;

    /**
     * Get the gestion virement frn.
     *
     * @return bool Returns the gestion virement frn.
     */
    public function getGestionVirementFrn() {
        return $this->gestionVirementFrn;
    }

    /**
     * Set the gestion virement frn.
     *
     * @param bool $gestionVirementFrn The gestion virement frn.
     */
    public function setGestionVirementFrn($gestionVirementFrn) {
        $this->gestionVirementFrn = $gestionVirementFrn;
        return $this;
    }
}
