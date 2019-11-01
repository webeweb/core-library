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
 * Nbre h dimanche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHDimancheTrait {

    /**
     * Nbre h dimanche.
     *
     * @var float
     */
    private $nbreHDimanche;

    /**
     * Get the nbre h dimanche.
     *
     * @return float Returns the nbre h dimanche.
     */
    public function getNbreHDimanche() {
        return $this->nbreHDimanche;
    }

    /**
     * Set the nbre h dimanche.
     *
     * @param float $nbreHDimanche The nbre h dimanche.
     */
    public function setNbreHDimanche($nbreHDimanche) {
        $this->nbreHDimanche = $nbreHDimanche;
        return $this;
    }
}
