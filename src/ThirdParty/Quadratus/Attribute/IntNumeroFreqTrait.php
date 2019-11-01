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
 * Numero freq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroFreqTrait {

    /**
     * Numero freq.
     *
     * @var int
     */
    private $numeroFreq;

    /**
     * Get the numero freq.
     *
     * @return int Returns the numero freq.
     */
    public function getNumeroFreq() {
        return $this->numeroFreq;
    }

    /**
     * Set the numero freq.
     *
     * @param int $numeroFreq The numero freq.
     */
    public function setNumeroFreq($numeroFreq) {
        $this->numeroFreq = $numeroFreq;
        return $this;
    }
}
