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
 * Mtt apports trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttApportsTrait {

    /**
     * Mtt apports.
     *
     * @var float
     */
    private $mttApports;

    /**
     * Get the mtt apports.
     *
     * @return float Returns the mtt apports.
     */
    public function getMttApports() {
        return $this->mttApports;
    }

    /**
     * Set the mtt apports.
     *
     * @param float $mttApports The mtt apports.
     */
    public function setMttApports($mttApports) {
        $this->mttApports = $mttApports;
        return $this;
    }
}
