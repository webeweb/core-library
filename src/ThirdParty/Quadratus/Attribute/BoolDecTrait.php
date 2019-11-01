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
 * Dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDecTrait {

    /**
     * Dec.
     *
     * @var bool
     */
    private $dec;

    /**
     * Get the dec.
     *
     * @return bool Returns the dec.
     */
    public function getDec() {
        return $this->dec;
    }

    /**
     * Set the dec.
     *
     * @param bool $dec The dec.
     */
    public function setDec($dec) {
        $this->dec = $dec;
        return $this;
    }
}
