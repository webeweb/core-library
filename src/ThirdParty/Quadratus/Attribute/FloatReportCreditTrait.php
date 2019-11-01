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
 * Report credit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReportCreditTrait {

    /**
     * Report credit.
     *
     * @var float
     */
    private $reportCredit;

    /**
     * Get the report credit.
     *
     * @return float Returns the report credit.
     */
    public function getReportCredit() {
        return $this->reportCredit;
    }

    /**
     * Set the report credit.
     *
     * @param float $reportCredit The report credit.
     */
    public function setReportCredit($reportCredit) {
        $this->reportCredit = $reportCredit;
        return $this;
    }
}
