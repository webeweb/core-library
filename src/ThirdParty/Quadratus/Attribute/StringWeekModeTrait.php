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
 * Week mode trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringWeekModeTrait {

    /**
     * Week mode.
     *
     * @var string
     */
    private $weekMode;

    /**
     * Get the week mode.
     *
     * @return string Returns the week mode.
     */
    public function getWeekMode() {
        return $this->weekMode;
    }

    /**
     * Set the week mode.
     *
     * @param string $weekMode The week mode.
     */
    public function setWeekMode($weekMode) {
        $this->weekMode = $weekMode;
        return $this;
    }
}
