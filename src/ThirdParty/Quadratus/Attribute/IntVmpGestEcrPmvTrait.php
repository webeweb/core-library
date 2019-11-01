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
 * Vmp gest ecr pmv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntVmpGestEcrPmvTrait {

    /**
     * Vmp gest ecr pmv.
     *
     * @var int
     */
    private $vmpGestEcrPmv;

    /**
     * Get the vmp gest ecr pmv.
     *
     * @return int Returns the vmp gest ecr pmv.
     */
    public function getVmpGestEcrPmv() {
        return $this->vmpGestEcrPmv;
    }

    /**
     * Set the vmp gest ecr pmv.
     *
     * @param int $vmpGestEcrPmv The vmp gest ecr pmv.
     */
    public function setVmpGestEcrPmv($vmpGestEcrPmv) {
        $this->vmpGestEcrPmv = $vmpGestEcrPmv;
        return $this;
    }
}
