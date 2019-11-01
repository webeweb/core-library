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
 * Heures reel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresReelTrait {

    /**
     * Heures reel.
     *
     * @var float
     */
    private $heuresReel;

    /**
     * Get the heures reel.
     *
     * @return float Returns the heures reel.
     */
    public function getHeuresReel() {
        return $this->heuresReel;
    }

    /**
     * Set the heures reel.
     *
     * @param float $heuresReel The heures reel.
     */
    public function setHeuresReel($heuresReel) {
        $this->heuresReel = $heuresReel;
        return $this;
    }
}
