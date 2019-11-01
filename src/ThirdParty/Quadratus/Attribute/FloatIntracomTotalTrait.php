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
 * Intracom total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIntracomTotalTrait {

    /**
     * Intracom total.
     *
     * @var float
     */
    private $intracomTotal;

    /**
     * Get the intracom total.
     *
     * @return float Returns the intracom total.
     */
    public function getIntracomTotal() {
        return $this->intracomTotal;
    }

    /**
     * Set the intracom total.
     *
     * @param float $intracomTotal The intracom total.
     */
    public function setIntracomTotal($intracomTotal) {
        $this->intracomTotal = $intracomTotal;
        return $this;
    }
}
