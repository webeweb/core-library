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
 * Nb heures reel sous trait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeuresReelSousTraitTrait {

    /**
     * Nb heures reel sous trait.
     *
     * @var float
     */
    private $nbHeuresReelSousTrait;

    /**
     * Get the nb heures reel sous trait.
     *
     * @return float Returns the nb heures reel sous trait.
     */
    public function getNbHeuresReelSousTrait() {
        return $this->nbHeuresReelSousTrait;
    }

    /**
     * Set the nb heures reel sous trait.
     *
     * @param float $nbHeuresReelSousTrait The nb heures reel sous trait.
     */
    public function setNbHeuresReelSousTrait($nbHeuresReelSousTrait) {
        $this->nbHeuresReelSousTrait = $nbHeuresReelSousTrait;
        return $this;
    }
}
