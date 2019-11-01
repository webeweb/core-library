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
 * Un bon par mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUnBonParMoisTrait {

    /**
     * Un bon par mois.
     *
     * @var bool
     */
    private $unBonParMois;

    /**
     * Get the un bon par mois.
     *
     * @return bool Returns the un bon par mois.
     */
    public function getUnBonParMois() {
        return $this->unBonParMois;
    }

    /**
     * Set the un bon par mois.
     *
     * @param bool $unBonParMois The un bon par mois.
     */
    public function setUnBonParMois($unBonParMois) {
        $this->unBonParMois = $unBonParMois;
        return $this;
    }
}
