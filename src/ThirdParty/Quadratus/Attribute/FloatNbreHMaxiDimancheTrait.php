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
 * Nbre h maxi dimanche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMaxiDimancheTrait {

    /**
     * Nbre h maxi dimanche.
     *
     * @var float
     */
    private $nbreHMaxiDimanche;

    /**
     * Get the nbre h maxi dimanche.
     *
     * @return float Returns the nbre h maxi dimanche.
     */
    public function getNbreHMaxiDimanche() {
        return $this->nbreHMaxiDimanche;
    }

    /**
     * Set the nbre h maxi dimanche.
     *
     * @param float $nbreHMaxiDimanche The nbre h maxi dimanche.
     */
    public function setNbreHMaxiDimanche($nbreHMaxiDimanche) {
        $this->nbreHMaxiDimanche = $nbreHMaxiDimanche;
        return $this;
    }
}
