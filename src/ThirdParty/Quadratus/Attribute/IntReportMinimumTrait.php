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
 * Report minimum trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntReportMinimumTrait {

    /**
     * Report minimum.
     *
     * @var int
     */
    private $reportMinimum;

    /**
     * Get the report minimum.
     *
     * @return int Returns the report minimum.
     */
    public function getReportMinimum() {
        return $this->reportMinimum;
    }

    /**
     * Set the report minimum.
     *
     * @param int $reportMinimum The report minimum.
     */
    public function setReportMinimum($reportMinimum) {
        $this->reportMinimum = $reportMinimum;
        return $this;
    }
}
