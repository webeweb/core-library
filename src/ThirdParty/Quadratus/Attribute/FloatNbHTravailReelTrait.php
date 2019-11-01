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
 * Nb h travail reel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHTravailReelTrait {

    /**
     * Nb h travail reel.
     *
     * @var float
     */
    private $nbHTravailReel;

    /**
     * Get the nb h travail reel.
     *
     * @return float Returns the nb h travail reel.
     */
    public function getNbHTravailReel() {
        return $this->nbHTravailReel;
    }

    /**
     * Set the nb h travail reel.
     *
     * @param float $nbHTravailReel The nb h travail reel.
     */
    public function setNbHTravailReel($nbHTravailReel) {
        $this->nbHTravailReel = $nbHTravailReel;
        return $this;
    }
}
