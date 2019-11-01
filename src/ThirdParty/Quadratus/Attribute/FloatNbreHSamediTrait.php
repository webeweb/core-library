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
 * Nbre h samedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHSamediTrait {

    /**
     * Nbre h samedi.
     *
     * @var float
     */
    private $nbreHSamedi;

    /**
     * Get the nbre h samedi.
     *
     * @return float Returns the nbre h samedi.
     */
    public function getNbreHSamedi() {
        return $this->nbreHSamedi;
    }

    /**
     * Set the nbre h samedi.
     *
     * @param float $nbreHSamedi The nbre h samedi.
     */
    public function setNbreHSamedi($nbreHSamedi) {
        $this->nbreHSamedi = $nbreHSamedi;
        return $this;
    }
}
