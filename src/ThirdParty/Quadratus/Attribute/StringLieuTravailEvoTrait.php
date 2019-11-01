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
 * Lieu travail evo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuTravailEvoTrait {

    /**
     * Lieu travail evo.
     *
     * @var string
     */
    private $lieuTravailEvo;

    /**
     * Get the lieu travail evo.
     *
     * @return string Returns the lieu travail evo.
     */
    public function getLieuTravailEvo() {
        return $this->lieuTravailEvo;
    }

    /**
     * Set the lieu travail evo.
     *
     * @param string $lieuTravailEvo The lieu travail evo.
     */
    public function setLieuTravailEvo($lieuTravailEvo) {
        $this->lieuTravailEvo = $lieuTravailEvo;
        return $this;
    }
}
