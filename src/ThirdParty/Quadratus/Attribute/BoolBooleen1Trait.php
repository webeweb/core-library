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
 * Booleen1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBooleen1Trait {

    /**
     * Booleen1.
     *
     * @var bool
     */
    private $booleen1;

    /**
     * Get the booleen1.
     *
     * @return bool Returns the booleen1.
     */
    public function getBooleen1() {
        return $this->booleen1;
    }

    /**
     * Set the booleen1.
     *
     * @param bool $booleen1 The booleen1.
     */
    public function setBooleen1($booleen1) {
        $this->booleen1 = $booleen1;
        return $this;
    }
}
