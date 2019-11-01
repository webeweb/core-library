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
 * Az4279 nb v trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAz4279NbVTrait {

    /**
     * Az4279 nb v.
     *
     * @var int
     */
    private $az4279NbV;

    /**
     * Get the az4279 nb v.
     *
     * @return int Returns the az4279 nb v.
     */
    public function getAz4279NbV() {
        return $this->az4279NbV;
    }

    /**
     * Set the az4279 nb v.
     *
     * @param int $az4279NbV The az4279 nb v.
     */
    public function setAz4279NbV($az4279NbV) {
        $this->az4279NbV = $az4279NbV;
        return $this;
    }
}
