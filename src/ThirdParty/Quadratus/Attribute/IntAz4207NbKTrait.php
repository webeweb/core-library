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
 * Az4207 nb k trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAz4207NbKTrait {

    /**
     * Az4207 nb k.
     *
     * @var int
     */
    private $az4207NbK;

    /**
     * Get the az4207 nb k.
     *
     * @return int Returns the az4207 nb k.
     */
    public function getAz4207NbK() {
        return $this->az4207NbK;
    }

    /**
     * Set the az4207 nb k.
     *
     * @param int $az4207NbK The az4207 nb k.
     */
    public function setAz4207NbK($az4207NbK) {
        $this->az4207NbK = $az4207NbK;
        return $this;
    }
}
