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
 * Exclure loi tepa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureLoiTepaTrait {

    /**
     * Exclure loi tepa.
     *
     * @var bool
     */
    private $exclureLoiTepa;

    /**
     * Get the exclure loi tepa.
     *
     * @return bool Returns the exclure loi tepa.
     */
    public function getExclureLoiTepa() {
        return $this->exclureLoiTepa;
    }

    /**
     * Set the exclure loi tepa.
     *
     * @param bool $exclureLoiTepa The exclure loi tepa.
     */
    public function setExclureLoiTepa($exclureLoiTepa) {
        $this->exclureLoiTepa = $exclureLoiTepa;
        return $this;
    }
}
