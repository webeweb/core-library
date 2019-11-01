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
 * Jan trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolJanTrait {

    /**
     * Jan.
     *
     * @var bool
     */
    private $jan;

    /**
     * Get the jan.
     *
     * @return bool Returns the jan.
     */
    public function getJan() {
        return $this->jan;
    }

    /**
     * Set the jan.
     *
     * @param bool $jan The jan.
     */
    public function setJan($jan) {
        $this->jan = $jan;
        return $this;
    }
}
