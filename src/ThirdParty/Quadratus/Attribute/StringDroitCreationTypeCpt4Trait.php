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
 * Droit creation type cpt4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitCreationTypeCpt4Trait {

    /**
     * Droit creation type cpt4.
     *
     * @var string
     */
    private $droitCreationTypeCpt4;

    /**
     * Get the droit creation type cpt4.
     *
     * @return string Returns the droit creation type cpt4.
     */
    public function getDroitCreationTypeCpt4() {
        return $this->droitCreationTypeCpt4;
    }

    /**
     * Set the droit creation type cpt4.
     *
     * @param string $droitCreationTypeCpt4 The droit creation type cpt4.
     */
    public function setDroitCreationTypeCpt4($droitCreationTypeCpt4) {
        $this->droitCreationTypeCpt4 = $droitCreationTypeCpt4;
        return $this;
    }
}
