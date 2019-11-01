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
 * Az4280 nb v trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAz4280NbVTrait {

    /**
     * Az4280 nb v.
     *
     * @var int
     */
    private $az4280NbV;

    /**
     * Get the az4280 nb v.
     *
     * @return int Returns the az4280 nb v.
     */
    public function getAz4280NbV() {
        return $this->az4280NbV;
    }

    /**
     * Set the az4280 nb v.
     *
     * @param int $az4280NbV The az4280 nb v.
     */
    public function setAz4280NbV($az4280NbV) {
        $this->az4280NbV = $az4280NbV;
        return $this;
    }
}
