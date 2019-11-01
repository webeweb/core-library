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
 * Droit creation type cpt8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitCreationTypeCpt8Trait {

    /**
     * Droit creation type cpt8.
     *
     * @var string
     */
    private $droitCreationTypeCpt8;

    /**
     * Get the droit creation type cpt8.
     *
     * @return string Returns the droit creation type cpt8.
     */
    public function getDroitCreationTypeCpt8() {
        return $this->droitCreationTypeCpt8;
    }

    /**
     * Set the droit creation type cpt8.
     *
     * @param string $droitCreationTypeCpt8 The droit creation type cpt8.
     */
    public function setDroitCreationTypeCpt8($droitCreationTypeCpt8) {
        $this->droitCreationTypeCpt8 = $droitCreationTypeCpt8;
        return $this;
    }
}
