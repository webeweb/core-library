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
 * Nb heures reel interim trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeuresReelInterimTrait {

    /**
     * Nb heures reel interim.
     *
     * @var float
     */
    private $nbHeuresReelInterim;

    /**
     * Get the nb heures reel interim.
     *
     * @return float Returns the nb heures reel interim.
     */
    public function getNbHeuresReelInterim() {
        return $this->nbHeuresReelInterim;
    }

    /**
     * Set the nb heures reel interim.
     *
     * @param float $nbHeuresReelInterim The nb heures reel interim.
     */
    public function setNbHeuresReelInterim($nbHeuresReelInterim) {
        $this->nbHeuresReelInterim = $nbHeuresReelInterim;
        return $this;
    }
}
