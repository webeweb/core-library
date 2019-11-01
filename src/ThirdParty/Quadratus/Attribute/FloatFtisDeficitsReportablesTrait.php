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
 * Ftis deficits reportables trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFtisDeficitsReportablesTrait {

    /**
     * Ftis deficits reportables.
     *
     * @var float
     */
    private $ftisDeficitsReportables;

    /**
     * Get the ftis deficits reportables.
     *
     * @return float Returns the ftis deficits reportables.
     */
    public function getFtisDeficitsReportables() {
        return $this->ftisDeficitsReportables;
    }

    /**
     * Set the ftis deficits reportables.
     *
     * @param float $ftisDeficitsReportables The ftis deficits reportables.
     */
    public function setFtisDeficitsReportables($ftisDeficitsReportables) {
        $this->ftisDeficitsReportables = $ftisDeficitsReportables;
        return $this;
    }
}
