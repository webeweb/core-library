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
 * Width bord trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntWidthBordTrait {

    /**
     * Width bord.
     *
     * @var int
     */
    private $widthBord;

    /**
     * Get the width bord.
     *
     * @return int Returns the width bord.
     */
    public function getWidthBord() {
        return $this->widthBord;
    }

    /**
     * Set the width bord.
     *
     * @param int $widthBord The width bord.
     */
    public function setWidthBord($widthBord) {
        $this->widthBord = $widthBord;
        return $this;
    }
}
