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
 * Coche intervenant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCocheIntervenantTrait {

    /**
     * Coche intervenant.
     *
     * @var bool
     */
    private $cocheIntervenant;

    /**
     * Get the coche intervenant.
     *
     * @return bool Returns the coche intervenant.
     */
    public function getCocheIntervenant() {
        return $this->cocheIntervenant;
    }

    /**
     * Set the coche intervenant.
     *
     * @param bool $cocheIntervenant The coche intervenant.
     */
    public function setCocheIntervenant($cocheIntervenant) {
        $this->cocheIntervenant = $cocheIntervenant;
        return $this;
    }
}
