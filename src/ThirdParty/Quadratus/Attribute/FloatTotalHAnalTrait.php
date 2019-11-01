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
 * Total h anal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalHAnalTrait {

    /**
     * Total h anal.
     *
     * @var float
     */
    private $totalHAnal;

    /**
     * Get the total h anal.
     *
     * @return float Returns the total h anal.
     */
    public function getTotalHAnal() {
        return $this->totalHAnal;
    }

    /**
     * Set the total h anal.
     *
     * @param float $totalHAnal The total h anal.
     */
    public function setTotalHAnal($totalHAnal) {
        $this->totalHAnal = $totalHAnal;
        return $this;
    }
}
