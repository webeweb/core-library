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
 * Emprunt en francs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEmpruntEnFrancsTrait {

    /**
     * Emprunt en francs.
     *
     * @var bool
     */
    private $empruntEnFrancs;

    /**
     * Get the emprunt en francs.
     *
     * @return bool Returns the emprunt en francs.
     */
    public function getEmpruntEnFrancs() {
        return $this->empruntEnFrancs;
    }

    /**
     * Set the emprunt en francs.
     *
     * @param bool $empruntEnFrancs The emprunt en francs.
     */
    public function setEmpruntEnFrancs($empruntEnFrancs) {
        $this->empruntEnFrancs = $empruntEnFrancs;
        return $this;
    }
}
