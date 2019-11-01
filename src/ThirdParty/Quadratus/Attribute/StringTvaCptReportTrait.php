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
 * Tva cpt report trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptReportTrait {

    /**
     * Tva cpt report.
     *
     * @var string
     */
    private $tvaCptReport;

    /**
     * Get the tva cpt report.
     *
     * @return string Returns the tva cpt report.
     */
    public function getTvaCptReport() {
        return $this->tvaCptReport;
    }

    /**
     * Set the tva cpt report.
     *
     * @param string $tvaCptReport The tva cpt report.
     */
    public function setTvaCptReport($tvaCptReport) {
        $this->tvaCptReport = $tvaCptReport;
        return $this;
    }
}
