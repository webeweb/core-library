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
 * X fer cpta img trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCptaImgTrait {

    /**
     * X fer cpta img.
     *
     * @var bool
     */
    private $xFerCptaImg;

    /**
     * Get the x fer cpta img.
     *
     * @return bool Returns the x fer cpta img.
     */
    public function getXFerCptaImg() {
        return $this->xFerCptaImg;
    }

    /**
     * Set the x fer cpta img.
     *
     * @param bool $xFerCptaImg The x fer cpta img.
     */
    public function setXFerCptaImg($xFerCptaImg) {
        $this->xFerCptaImg = $xFerCptaImg;
        return $this;
    }
}
