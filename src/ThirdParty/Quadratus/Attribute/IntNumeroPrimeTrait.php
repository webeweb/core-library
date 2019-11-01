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
 * Numero prime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroPrimeTrait {

    /**
     * Numero prime.
     *
     * @var int
     */
    private $numeroPrime;

    /**
     * Get the numero prime.
     *
     * @return int Returns the numero prime.
     */
    public function getNumeroPrime() {
        return $this->numeroPrime;
    }

    /**
     * Set the numero prime.
     *
     * @param int $numeroPrime The numero prime.
     */
    public function setNumeroPrime($numeroPrime) {
        $this->numeroPrime = $numeroPrime;
        return $this;
    }
}
