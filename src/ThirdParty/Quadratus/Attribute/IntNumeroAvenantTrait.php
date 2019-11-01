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
 * Numero avenant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroAvenantTrait {

    /**
     * Numero avenant.
     *
     * @var int
     */
    private $numeroAvenant;

    /**
     * Get the numero avenant.
     *
     * @return int Returns the numero avenant.
     */
    public function getNumeroAvenant() {
        return $this->numeroAvenant;
    }

    /**
     * Set the numero avenant.
     *
     * @param int $numeroAvenant The numero avenant.
     */
    public function setNumeroAvenant($numeroAvenant) {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }
}
