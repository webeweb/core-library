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
 * Nbre h mini dimanche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMiniDimancheTrait {

    /**
     * Nbre h mini dimanche.
     *
     * @var float
     */
    private $nbreHMiniDimanche;

    /**
     * Get the nbre h mini dimanche.
     *
     * @return float Returns the nbre h mini dimanche.
     */
    public function getNbreHMiniDimanche() {
        return $this->nbreHMiniDimanche;
    }

    /**
     * Set the nbre h mini dimanche.
     *
     * @param float $nbreHMiniDimanche The nbre h mini dimanche.
     */
    public function setNbreHMiniDimanche($nbreHMiniDimanche) {
        $this->nbreHMiniDimanche = $nbreHMiniDimanche;
        return $this;
    }
}
