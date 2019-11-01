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
 * Nb heures sous trait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeuresSousTraitTrait {

    /**
     * Nb heures sous trait.
     *
     * @var float
     */
    private $nbHeuresSousTrait;

    /**
     * Get the nb heures sous trait.
     *
     * @return float Returns the nb heures sous trait.
     */
    public function getNbHeuresSousTrait() {
        return $this->nbHeuresSousTrait;
    }

    /**
     * Set the nb heures sous trait.
     *
     * @param float $nbHeuresSousTrait The nb heures sous trait.
     */
    public function setNbHeuresSousTrait($nbHeuresSousTrait) {
        $this->nbHeuresSousTrait = $nbHeuresSousTrait;
        return $this;
    }
}
