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
 * Nb mois ecoules trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbMoisEcoulesTrait {

    /**
     * Nb mois ecoules.
     *
     * @var int
     */
    private $nbMoisEcoules;

    /**
     * Get the nb mois ecoules.
     *
     * @return int Returns the nb mois ecoules.
     */
    public function getNbMoisEcoules() {
        return $this->nbMoisEcoules;
    }

    /**
     * Set the nb mois ecoules.
     *
     * @param int $nbMoisEcoules The nb mois ecoules.
     */
    public function setNbMoisEcoules($nbMoisEcoules) {
        $this->nbMoisEcoules = $nbMoisEcoules;
        return $this;
    }
}
