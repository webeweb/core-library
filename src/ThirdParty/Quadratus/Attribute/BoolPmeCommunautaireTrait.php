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
 * Pme communautaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPmeCommunautaireTrait {

    /**
     * Pme communautaire.
     *
     * @var bool
     */
    private $pmeCommunautaire;

    /**
     * Get the pme communautaire.
     *
     * @return bool Returns the pme communautaire.
     */
    public function getPmeCommunautaire() {
        return $this->pmeCommunautaire;
    }

    /**
     * Set the pme communautaire.
     *
     * @param bool $pmeCommunautaire The pme communautaire.
     */
    public function setPmeCommunautaire($pmeCommunautaire) {
        $this->pmeCommunautaire = $pmeCommunautaire;
        return $this;
    }
}
