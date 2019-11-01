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
 * Nbre h mercredi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMercrediTrait {

    /**
     * Nbre h mercredi.
     *
     * @var float
     */
    private $nbreHMercredi;

    /**
     * Get the nbre h mercredi.
     *
     * @return float Returns the nbre h mercredi.
     */
    public function getNbreHMercredi() {
        return $this->nbreHMercredi;
    }

    /**
     * Set the nbre h mercredi.
     *
     * @param float $nbreHMercredi The nbre h mercredi.
     */
    public function setNbreHMercredi($nbreHMercredi) {
        $this->nbreHMercredi = $nbreHMercredi;
        return $this;
    }
}
