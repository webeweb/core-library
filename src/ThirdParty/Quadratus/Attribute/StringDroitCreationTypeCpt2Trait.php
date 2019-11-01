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
 * Droit creation type cpt2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitCreationTypeCpt2Trait {

    /**
     * Droit creation type cpt2.
     *
     * @var string
     */
    private $droitCreationTypeCpt2;

    /**
     * Get the droit creation type cpt2.
     *
     * @return string Returns the droit creation type cpt2.
     */
    public function getDroitCreationTypeCpt2() {
        return $this->droitCreationTypeCpt2;
    }

    /**
     * Set the droit creation type cpt2.
     *
     * @param string $droitCreationTypeCpt2 The droit creation type cpt2.
     */
    public function setDroitCreationTypeCpt2($droitCreationTypeCpt2) {
        $this->droitCreationTypeCpt2 = $droitCreationTypeCpt2;
        return $this;
    }
}
