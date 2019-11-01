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
 * Present trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPresentTrait {

    /**
     * Present.
     *
     * @var bool
     */
    private $present;

    /**
     * Get the present.
     *
     * @return bool Returns the present.
     */
    public function getPresent() {
        return $this->present;
    }

    /**
     * Set the present.
     *
     * @param bool $present The present.
     */
    public function setPresent($present) {
        $this->present = $present;
        return $this;
    }
}
