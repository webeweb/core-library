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
 * Prime7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrime7Trait {

    /**
     * Prime7.
     *
     * @var float
     */
    private $prime7;

    /**
     * Get the prime7.
     *
     * @return float Returns the prime7.
     */
    public function getPrime7() {
        return $this->prime7;
    }

    /**
     * Set the prime7.
     *
     * @param float $prime7 The prime7.
     */
    public function setPrime7($prime7) {
        $this->prime7 = $prime7;
        return $this;
    }
}
