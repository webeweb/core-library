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
 * Droit creation type cpt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitCreationTypeCpt1Trait {

    /**
     * Droit creation type cpt1.
     *
     * @var string
     */
    private $droitCreationTypeCpt1;

    /**
     * Get the droit creation type cpt1.
     *
     * @return string Returns the droit creation type cpt1.
     */
    public function getDroitCreationTypeCpt1() {
        return $this->droitCreationTypeCpt1;
    }

    /**
     * Set the droit creation type cpt1.
     *
     * @param string $droitCreationTypeCpt1 The droit creation type cpt1.
     */
    public function setDroitCreationTypeCpt1($droitCreationTypeCpt1) {
        $this->droitCreationTypeCpt1 = $droitCreationTypeCpt1;
        return $this;
    }
}
