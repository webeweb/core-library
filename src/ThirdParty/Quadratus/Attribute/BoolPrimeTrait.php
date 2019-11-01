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
 * Prime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrimeTrait {

    /**
     * Prime.
     *
     * @var bool
     */
    private $prime;

    /**
     * Get the prime.
     *
     * @return bool Returns the prime.
     */
    public function getPrime() {
        return $this->prime;
    }

    /**
     * Set the prime.
     *
     * @param bool $prime The prime.
     */
    public function setPrime($prime) {
        $this->prime = $prime;
        return $this;
    }
}
