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
 * H sup loi tepa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHSupLoiTepaTrait {

    /**
     * H sup loi tepa.
     *
     * @var bool
     */
    private $hSupLoiTepa;

    /**
     * Get the h sup loi tepa.
     *
     * @return bool Returns the h sup loi tepa.
     */
    public function getHSupLoiTepa() {
        return $this->hSupLoiTepa;
    }

    /**
     * Set the h sup loi tepa.
     *
     * @param bool $hSupLoiTepa The h sup loi tepa.
     */
    public function setHSupLoiTepa($hSupLoiTepa) {
        $this->hSupLoiTepa = $hSupLoiTepa;
        return $this;
    }
}
