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
 * Droit creation type cpt10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitCreationTypeCpt10Trait {

    /**
     * Droit creation type cpt10.
     *
     * @var string
     */
    private $droitCreationTypeCpt10;

    /**
     * Get the droit creation type cpt10.
     *
     * @return string Returns the droit creation type cpt10.
     */
    public function getDroitCreationTypeCpt10() {
        return $this->droitCreationTypeCpt10;
    }

    /**
     * Set the droit creation type cpt10.
     *
     * @param string $droitCreationTypeCpt10 The droit creation type cpt10.
     */
    public function setDroitCreationTypeCpt10($droitCreationTypeCpt10) {
        $this->droitCreationTypeCpt10 = $droitCreationTypeCpt10;
        return $this;
    }
}
