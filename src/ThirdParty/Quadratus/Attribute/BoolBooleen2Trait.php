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
 * Booleen2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBooleen2Trait {

    /**
     * Booleen2.
     *
     * @var bool
     */
    private $booleen2;

    /**
     * Get the booleen2.
     *
     * @return bool Returns the booleen2.
     */
    public function getBooleen2() {
        return $this->booleen2;
    }

    /**
     * Set the booleen2.
     *
     * @param bool $booleen2 The booleen2.
     */
    public function setBooleen2($booleen2) {
        $this->booleen2 = $booleen2;
        return $this;
    }
}
