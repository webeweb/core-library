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
 * Total general trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTotalGeneralTrait {

    /**
     * Total general.
     *
     * @var int
     */
    private $totalGeneral;

    /**
     * Get the total general.
     *
     * @return int Returns the total general.
     */
    public function getTotalGeneral() {
        return $this->totalGeneral;
    }

    /**
     * Set the total general.
     *
     * @param int $totalGeneral The total general.
     */
    public function setTotalGeneral($totalGeneral) {
        $this->totalGeneral = $totalGeneral;
        return $this;
    }
}
