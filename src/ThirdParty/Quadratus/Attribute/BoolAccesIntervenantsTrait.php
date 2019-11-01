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
 * Acces intervenants trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesIntervenantsTrait {

    /**
     * Acces intervenants.
     *
     * @var bool
     */
    private $accesIntervenants;

    /**
     * Get the acces intervenants.
     *
     * @return bool Returns the acces intervenants.
     */
    public function getAccesIntervenants() {
        return $this->accesIntervenants;
    }

    /**
     * Set the acces intervenants.
     *
     * @param bool $accesIntervenants The acces intervenants.
     */
    public function setAccesIntervenants($accesIntervenants) {
        $this->accesIntervenants = $accesIntervenants;
        return $this;
    }
}
