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
 * Booleen4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBooleen4Trait {

    /**
     * Booleen4.
     *
     * @var bool
     */
    private $booleen4;

    /**
     * Get the booleen4.
     *
     * @return bool Returns the booleen4.
     */
    public function getBooleen4() {
        return $this->booleen4;
    }

    /**
     * Set the booleen4.
     *
     * @param bool $booleen4 The booleen4.
     */
    public function setBooleen4($booleen4) {
        $this->booleen4 = $booleen4;
        return $this;
    }
}
