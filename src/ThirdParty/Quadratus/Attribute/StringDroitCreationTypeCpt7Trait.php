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
 * Droit creation type cpt7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitCreationTypeCpt7Trait {

    /**
     * Droit creation type cpt7.
     *
     * @var string
     */
    private $droitCreationTypeCpt7;

    /**
     * Get the droit creation type cpt7.
     *
     * @return string Returns the droit creation type cpt7.
     */
    public function getDroitCreationTypeCpt7() {
        return $this->droitCreationTypeCpt7;
    }

    /**
     * Set the droit creation type cpt7.
     *
     * @param string $droitCreationTypeCpt7 The droit creation type cpt7.
     */
    public function setDroitCreationTypeCpt7($droitCreationTypeCpt7) {
        $this->droitCreationTypeCpt7 = $droitCreationTypeCpt7;
        return $this;
    }
}
