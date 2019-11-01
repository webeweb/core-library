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
 * Booleen10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBooleen10Trait {

    /**
     * Booleen10.
     *
     * @var bool
     */
    private $booleen10;

    /**
     * Get the booleen10.
     *
     * @return bool Returns the booleen10.
     */
    public function getBooleen10() {
        return $this->booleen10;
    }

    /**
     * Set the booleen10.
     *
     * @param bool $booleen10 The booleen10.
     */
    public function setBooleen10($booleen10) {
        $this->booleen10 = $booleen10;
        return $this;
    }
}
