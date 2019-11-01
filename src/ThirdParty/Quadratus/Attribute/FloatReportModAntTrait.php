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
 * Report mod ant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReportModAntTrait {

    /**
     * Report mod ant.
     *
     * @var float
     */
    private $reportModAnt;

    /**
     * Get the report mod ant.
     *
     * @return float Returns the report mod ant.
     */
    public function getReportModAnt() {
        return $this->reportModAnt;
    }

    /**
     * Set the report mod ant.
     *
     * @param float $reportModAnt The report mod ant.
     */
    public function setReportModAnt($reportModAnt) {
        $this->reportModAnt = $reportModAnt;
        return $this;
    }
}
