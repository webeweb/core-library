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
 * Nbre h maxi mercredi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMaxiMercrediTrait {

    /**
     * Nbre h maxi mercredi.
     *
     * @var float
     */
    private $nbreHMaxiMercredi;

    /**
     * Get the nbre h maxi mercredi.
     *
     * @return float Returns the nbre h maxi mercredi.
     */
    public function getNbreHMaxiMercredi() {
        return $this->nbreHMaxiMercredi;
    }

    /**
     * Set the nbre h maxi mercredi.
     *
     * @param float $nbreHMaxiMercredi The nbre h maxi mercredi.
     */
    public function setNbreHMaxiMercredi($nbreHMaxiMercredi) {
        $this->nbreHMaxiMercredi = $nbreHMaxiMercredi;
        return $this;
    }
}
