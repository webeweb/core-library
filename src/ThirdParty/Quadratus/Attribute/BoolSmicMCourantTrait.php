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
 * Smic m courant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSmicMCourantTrait {

    /**
     * Smic m courant.
     *
     * @var bool
     */
    private $smicMCourant;

    /**
     * Get the smic m courant.
     *
     * @return bool Returns the smic m courant.
     */
    public function getSmicMCourant() {
        return $this->smicMCourant;
    }

    /**
     * Set the smic m courant.
     *
     * @param bool $smicMCourant The smic m courant.
     */
    public function setSmicMCourant($smicMCourant) {
        $this->smicMCourant = $smicMCourant;
        return $this;
    }
}
