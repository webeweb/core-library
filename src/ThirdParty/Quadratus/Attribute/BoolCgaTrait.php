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
 * Cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCgaTrait {

    /**
     * Cga.
     *
     * @var bool
     */
    private $cga;

    /**
     * Get the cga.
     *
     * @return bool Returns the cga.
     */
    public function getCga() {
        return $this->cga;
    }

    /**
     * Set the cga.
     *
     * @param bool $cga The cga.
     */
    public function setCga($cga) {
        $this->cga = $cga;
        return $this;
    }
}
