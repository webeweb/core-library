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
 * Pas de reintegration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasDeReintegrationTrait {

    /**
     * Pas de reintegration.
     *
     * @var bool
     */
    private $pasDeReintegration;

    /**
     * Get the pas de reintegration.
     *
     * @return bool Returns the pas de reintegration.
     */
    public function getPasDeReintegration() {
        return $this->pasDeReintegration;
    }

    /**
     * Set the pas de reintegration.
     *
     * @param bool $pasDeReintegration The pas de reintegration.
     */
    public function setPasDeReintegration($pasDeReintegration) {
        $this->pasDeReintegration = $pasDeReintegration;
        return $this;
    }
}
