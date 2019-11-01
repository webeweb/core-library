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
 * X fer cpta frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCptaFrnTrait {

    /**
     * X fer cpta frn.
     *
     * @var bool
     */
    private $xFerCptaFrn;

    /**
     * Get the x fer cpta frn.
     *
     * @return bool Returns the x fer cpta frn.
     */
    public function getXFerCptaFrn() {
        return $this->xFerCptaFrn;
    }

    /**
     * Set the x fer cpta frn.
     *
     * @param bool $xFerCptaFrn The x fer cpta frn.
     */
    public function setXFerCptaFrn($xFerCptaFrn) {
        $this->xFerCptaFrn = $xFerCptaFrn;
        return $this;
    }
}
