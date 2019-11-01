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
 * Numero ayant droit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroAyantDroitTrait {

    /**
     * Numero ayant droit.
     *
     * @var int
     */
    private $numeroAyantDroit;

    /**
     * Get the numero ayant droit.
     *
     * @return int Returns the numero ayant droit.
     */
    public function getNumeroAyantDroit() {
        return $this->numeroAyantDroit;
    }

    /**
     * Set the numero ayant droit.
     *
     * @param int $numeroAyantDroit The numero ayant droit.
     */
    public function setNumeroAyantDroit($numeroAyantDroit) {
        $this->numeroAyantDroit = $numeroAyantDroit;
        return $this;
    }
}
