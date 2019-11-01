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
 * Nbre h mini mercredi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMiniMercrediTrait {

    /**
     * Nbre h mini mercredi.
     *
     * @var float
     */
    private $nbreHMiniMercredi;

    /**
     * Get the nbre h mini mercredi.
     *
     * @return float Returns the nbre h mini mercredi.
     */
    public function getNbreHMiniMercredi() {
        return $this->nbreHMiniMercredi;
    }

    /**
     * Set the nbre h mini mercredi.
     *
     * @param float $nbreHMiniMercredi The nbre h mini mercredi.
     */
    public function setNbreHMiniMercredi($nbreHMiniMercredi) {
        $this->nbreHMiniMercredi = $nbreHMiniMercredi;
        return $this;
    }
}
