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
 * Prime1 mai trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrime1MaiTrait {

    /**
     * Prime1 mai.
     *
     * @var float
     */
    private $prime1Mai;

    /**
     * Get the prime1 mai.
     *
     * @return float Returns the prime1 mai.
     */
    public function getPrime1Mai() {
        return $this->prime1Mai;
    }

    /**
     * Set the prime1 mai.
     *
     * @param float $prime1Mai The prime1 mai.
     */
    public function setPrime1Mai($prime1Mai) {
        $this->prime1Mai = $prime1Mai;
        return $this;
    }
}
