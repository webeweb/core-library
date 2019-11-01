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
 * X fer cr dsi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCrDsiTrait {

    /**
     * X fer cr dsi.
     *
     * @var bool
     */
    private $xFerCrDsi;

    /**
     * Get the x fer cr dsi.
     *
     * @return bool Returns the x fer cr dsi.
     */
    public function getXFerCrDsi() {
        return $this->xFerCrDsi;
    }

    /**
     * Set the x fer cr dsi.
     *
     * @param bool $xFerCrDsi The x fer cr dsi.
     */
    public function setXFerCrDsi($xFerCrDsi) {
        $this->xFerCrDsi = $xFerCrDsi;
        return $this;
    }
}
