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
 * Numero jf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroJfTrait {

    /**
     * Numero jf.
     *
     * @var int
     */
    private $numeroJf;

    /**
     * Get the numero jf.
     *
     * @return int Returns the numero jf.
     */
    public function getNumeroJf() {
        return $this->numeroJf;
    }

    /**
     * Set the numero jf.
     *
     * @param int $numeroJf The numero jf.
     */
    public function setNumeroJf($numeroJf) {
        $this->numeroJf = $numeroJf;
        return $this;
    }
}
