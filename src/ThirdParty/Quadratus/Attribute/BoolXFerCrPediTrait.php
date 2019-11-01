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
 * X fer cr pedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCrPediTrait {

    /**
     * X fer cr pedi.
     *
     * @var bool
     */
    private $xFerCrPedi;

    /**
     * Get the x fer cr pedi.
     *
     * @return bool Returns the x fer cr pedi.
     */
    public function getXFerCrPedi() {
        return $this->xFerCrPedi;
    }

    /**
     * Set the x fer cr pedi.
     *
     * @param bool $xFerCrPedi The x fer cr pedi.
     */
    public function setXFerCrPedi($xFerCrPedi) {
        $this->xFerCrPedi = $xFerCrPedi;
        return $this;
    }
}
