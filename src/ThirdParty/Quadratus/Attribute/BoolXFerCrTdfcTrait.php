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
 * X fer cr tdfc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCrTdfcTrait {

    /**
     * X fer cr tdfc.
     *
     * @var bool
     */
    private $xFerCrTdfc;

    /**
     * Get the x fer cr tdfc.
     *
     * @return bool Returns the x fer cr tdfc.
     */
    public function getXFerCrTdfc() {
        return $this->xFerCrTdfc;
    }

    /**
     * Set the x fer cr tdfc.
     *
     * @param bool $xFerCrTdfc The x fer cr tdfc.
     */
    public function setXFerCrTdfc($xFerCrTdfc) {
        $this->xFerCrTdfc = $xFerCrTdfc;
        return $this;
    }
}
