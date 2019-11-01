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
 * Din trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDinTrait {

    /**
     * Din.
     *
     * @var bool
     */
    private $din;

    /**
     * Get the din.
     *
     * @return bool Returns the din.
     */
    public function getDin() {
        return $this->din;
    }

    /**
     * Set the din.
     *
     * @param bool $din The din.
     */
    public function setDin($din) {
        $this->din = $din;
        return $this;
    }
}
