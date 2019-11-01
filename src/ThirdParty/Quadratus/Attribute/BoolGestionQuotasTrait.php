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
 * Gestion quotas trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionQuotasTrait {

    /**
     * Gestion quotas.
     *
     * @var bool
     */
    private $gestionQuotas;

    /**
     * Get the gestion quotas.
     *
     * @return bool Returns the gestion quotas.
     */
    public function getGestionQuotas() {
        return $this->gestionQuotas;
    }

    /**
     * Set the gestion quotas.
     *
     * @param bool $gestionQuotas The gestion quotas.
     */
    public function setGestionQuotas($gestionQuotas) {
        $this->gestionQuotas = $gestionQuotas;
        return $this;
    }
}
