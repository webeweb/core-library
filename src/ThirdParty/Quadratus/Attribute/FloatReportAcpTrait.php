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
 * Report acp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReportAcpTrait {

    /**
     * Report acp.
     *
     * @var float
     */
    private $reportAcp;

    /**
     * Get the report acp.
     *
     * @return float Returns the report acp.
     */
    public function getReportAcp() {
        return $this->reportAcp;
    }

    /**
     * Set the report acp.
     *
     * @param float $reportAcp The report acp.
     */
    public function setReportAcp($reportAcp) {
        $this->reportAcp = $reportAcp;
        return $this;
    }
}
