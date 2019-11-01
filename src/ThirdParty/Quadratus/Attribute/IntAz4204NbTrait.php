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
 * Az4204 nb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAz4204NbTrait {

    /**
     * Az4204 nb.
     *
     * @var int
     */
    private $az4204Nb;

    /**
     * Get the az4204 nb.
     *
     * @return int Returns the az4204 nb.
     */
    public function getAz4204Nb() {
        return $this->az4204Nb;
    }

    /**
     * Set the az4204 nb.
     *
     * @param int $az4204Nb The az4204 nb.
     */
    public function setAz4204Nb($az4204Nb) {
        $this->az4204Nb = $az4204Nb;
        return $this;
    }
}
