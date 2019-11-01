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
 * X fer lst cabs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerLstCabsTrait {

    /**
     * X fer lst cabs.
     *
     * @var string
     */
    private $xFerLstCabs;

    /**
     * Get the x fer lst cabs.
     *
     * @return string Returns the x fer lst cabs.
     */
    public function getXFerLstCabs() {
        return $this->xFerLstCabs;
    }

    /**
     * Set the x fer lst cabs.
     *
     * @param string $xFerLstCabs The x fer lst cabs.
     */
    public function setXFerLstCabs($xFerLstCabs) {
        $this->xFerLstCabs = $xFerLstCabs;
        return $this;
    }
}
