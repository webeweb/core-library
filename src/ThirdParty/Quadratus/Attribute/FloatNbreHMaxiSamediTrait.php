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
 * Nbre h maxi samedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMaxiSamediTrait {

    /**
     * Nbre h maxi samedi.
     *
     * @var float
     */
    private $nbreHMaxiSamedi;

    /**
     * Get the nbre h maxi samedi.
     *
     * @return float Returns the nbre h maxi samedi.
     */
    public function getNbreHMaxiSamedi() {
        return $this->nbreHMaxiSamedi;
    }

    /**
     * Set the nbre h maxi samedi.
     *
     * @param float $nbreHMaxiSamedi The nbre h maxi samedi.
     */
    public function setNbreHMaxiSamedi($nbreHMaxiSamedi) {
        $this->nbreHMaxiSamedi = $nbreHMaxiSamedi;
        return $this;
    }
}
