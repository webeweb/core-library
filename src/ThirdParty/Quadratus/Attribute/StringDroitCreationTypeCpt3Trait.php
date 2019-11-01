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
 * Droit creation type cpt3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitCreationTypeCpt3Trait {

    /**
     * Droit creation type cpt3.
     *
     * @var string
     */
    private $droitCreationTypeCpt3;

    /**
     * Get the droit creation type cpt3.
     *
     * @return string Returns the droit creation type cpt3.
     */
    public function getDroitCreationTypeCpt3() {
        return $this->droitCreationTypeCpt3;
    }

    /**
     * Set the droit creation type cpt3.
     *
     * @param string $droitCreationTypeCpt3 The droit creation type cpt3.
     */
    public function setDroitCreationTypeCpt3($droitCreationTypeCpt3) {
        $this->droitCreationTypeCpt3 = $droitCreationTypeCpt3;
        return $this;
    }
}
