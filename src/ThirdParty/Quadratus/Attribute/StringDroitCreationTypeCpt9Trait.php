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
 * Droit creation type cpt9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitCreationTypeCpt9Trait {

    /**
     * Droit creation type cpt9.
     *
     * @var string
     */
    private $droitCreationTypeCpt9;

    /**
     * Get the droit creation type cpt9.
     *
     * @return string Returns the droit creation type cpt9.
     */
    public function getDroitCreationTypeCpt9() {
        return $this->droitCreationTypeCpt9;
    }

    /**
     * Set the droit creation type cpt9.
     *
     * @param string $droitCreationTypeCpt9 The droit creation type cpt9.
     */
    public function setDroitCreationTypeCpt9($droitCreationTypeCpt9) {
        $this->droitCreationTypeCpt9 = $droitCreationTypeCpt9;
        return $this;
    }
}
