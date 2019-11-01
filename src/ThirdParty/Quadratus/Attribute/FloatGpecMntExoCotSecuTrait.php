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
 * Gpec mnt exo cot secu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatGpecMntExoCotSecuTrait {

    /**
     * Gpec mnt exo cot secu.
     *
     * @var float
     */
    private $gpecMntExoCotSecu;

    /**
     * Get the gpec mnt exo cot secu.
     *
     * @return float Returns the gpec mnt exo cot secu.
     */
    public function getGpecMntExoCotSecu() {
        return $this->gpecMntExoCotSecu;
    }

    /**
     * Set the gpec mnt exo cot secu.
     *
     * @param float $gpecMntExoCotSecu The gpec mnt exo cot secu.
     */
    public function setGpecMntExoCotSecu($gpecMntExoCotSecu) {
        $this->gpecMntExoCotSecu = $gpecMntExoCotSecu;
        return $this;
    }
}
