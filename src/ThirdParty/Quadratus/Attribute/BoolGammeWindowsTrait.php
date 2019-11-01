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
 * Gamme windows trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGammeWindowsTrait {

    /**
     * Gamme windows.
     *
     * @var bool
     */
    private $gammeWindows;

    /**
     * Get the gamme windows.
     *
     * @return bool Returns the gamme windows.
     */
    public function getGammeWindows() {
        return $this->gammeWindows;
    }

    /**
     * Set the gamme windows.
     *
     * @param bool $gammeWindows The gamme windows.
     */
    public function setGammeWindows($gammeWindows) {
        $this->gammeWindows = $gammeWindows;
        return $this;
    }
}
