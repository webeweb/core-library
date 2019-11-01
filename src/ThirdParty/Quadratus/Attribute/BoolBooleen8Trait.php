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
 * Booleen8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBooleen8Trait {

    /**
     * Booleen8.
     *
     * @var bool
     */
    private $booleen8;

    /**
     * Get the booleen8.
     *
     * @return bool Returns the booleen8.
     */
    public function getBooleen8() {
        return $this->booleen8;
    }

    /**
     * Set the booleen8.
     *
     * @param bool $booleen8 The booleen8.
     */
    public function setBooleen8($booleen8) {
        $this->booleen8 = $booleen8;
        return $this;
    }
}
