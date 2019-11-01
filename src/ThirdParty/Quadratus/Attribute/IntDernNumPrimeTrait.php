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
 * Dern num prime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDernNumPrimeTrait {

    /**
     * Dern num prime.
     *
     * @var int
     */
    private $dernNumPrime;

    /**
     * Get the dern num prime.
     *
     * @return int Returns the dern num prime.
     */
    public function getDernNumPrime() {
        return $this->dernNumPrime;
    }

    /**
     * Set the dern num prime.
     *
     * @param int $dernNumPrime The dern num prime.
     */
    public function setDernNumPrime($dernNumPrime) {
        $this->dernNumPrime = $dernNumPrime;
        return $this;
    }
}
