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
 * Fev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFevTrait {

    /**
     * Fev.
     *
     * @var bool
     */
    private $fev;

    /**
     * Get the fev.
     *
     * @return bool Returns the fev.
     */
    public function getFev() {
        return $this->fev;
    }

    /**
     * Set the fev.
     *
     * @param bool $fev The fev.
     */
    public function setFev($fev) {
        $this->fev = $fev;
        return $this;
    }
}
