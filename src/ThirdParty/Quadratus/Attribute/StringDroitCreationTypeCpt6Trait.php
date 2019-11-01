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
 * Droit creation type cpt6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitCreationTypeCpt6Trait {

    /**
     * Droit creation type cpt6.
     *
     * @var string
     */
    private $droitCreationTypeCpt6;

    /**
     * Get the droit creation type cpt6.
     *
     * @return string Returns the droit creation type cpt6.
     */
    public function getDroitCreationTypeCpt6() {
        return $this->droitCreationTypeCpt6;
    }

    /**
     * Set the droit creation type cpt6.
     *
     * @param string $droitCreationTypeCpt6 The droit creation type cpt6.
     */
    public function setDroitCreationTypeCpt6($droitCreationTypeCpt6) {
        $this->droitCreationTypeCpt6 = $droitCreationTypeCpt6;
        return $this;
    }
}
