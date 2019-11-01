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
 * Nbre h mini samedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMiniSamediTrait {

    /**
     * Nbre h mini samedi.
     *
     * @var float
     */
    private $nbreHMiniSamedi;

    /**
     * Get the nbre h mini samedi.
     *
     * @return float Returns the nbre h mini samedi.
     */
    public function getNbreHMiniSamedi() {
        return $this->nbreHMiniSamedi;
    }

    /**
     * Set the nbre h mini samedi.
     *
     * @param float $nbreHMiniSamedi The nbre h mini samedi.
     */
    public function setNbreHMiniSamedi($nbreHMiniSamedi) {
        $this->nbreHMiniSamedi = $nbreHMiniSamedi;
        return $this;
    }
}
