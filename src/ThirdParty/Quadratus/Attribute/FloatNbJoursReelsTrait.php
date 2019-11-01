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
 * Nb jours reels trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJoursReelsTrait {

    /**
     * Nb jours reels.
     *
     * @var float
     */
    private $nbJoursReels;

    /**
     * Get the nb jours reels.
     *
     * @return float Returns the nb jours reels.
     */
    public function getNbJoursReels() {
        return $this->nbJoursReels;
    }

    /**
     * Set the nb jours reels.
     *
     * @param float $nbJoursReels The nb jours reels.
     */
    public function setNbJoursReels($nbJoursReels) {
        $this->nbJoursReels = $nbJoursReels;
        return $this;
    }
}
