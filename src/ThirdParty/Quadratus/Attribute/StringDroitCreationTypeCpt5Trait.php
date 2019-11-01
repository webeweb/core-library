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
 * Droit creation type cpt5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitCreationTypeCpt5Trait {

    /**
     * Droit creation type cpt5.
     *
     * @var string
     */
    private $droitCreationTypeCpt5;

    /**
     * Get the droit creation type cpt5.
     *
     * @return string Returns the droit creation type cpt5.
     */
    public function getDroitCreationTypeCpt5() {
        return $this->droitCreationTypeCpt5;
    }

    /**
     * Set the droit creation type cpt5.
     *
     * @param string $droitCreationTypeCpt5 The droit creation type cpt5.
     */
    public function setDroitCreationTypeCpt5($droitCreationTypeCpt5) {
        $this->droitCreationTypeCpt5 = $droitCreationTypeCpt5;
        return $this;
    }
}
