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
 * Rt fdans fact dev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRtFdansFactDevTrait {

    /**
     * Rt fdans fact dev.
     *
     * @var bool
     */
    private $rtFdansFactDev;

    /**
     * Get the rt fdans fact dev.
     *
     * @return bool Returns the rt fdans fact dev.
     */
    public function getRtFdansFactDev() {
        return $this->rtFdansFactDev;
    }

    /**
     * Set the rt fdans fact dev.
     *
     * @param bool $rtFdansFactDev The rt fdans fact dev.
     */
    public function setRtFdansFactDev($rtFdansFactDev) {
        $this->rtFdansFactDev = $rtFdansFactDev;
        return $this;
    }
}
