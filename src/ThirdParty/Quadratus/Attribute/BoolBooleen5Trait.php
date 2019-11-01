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
 * Booleen5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBooleen5Trait {

    /**
     * Booleen5.
     *
     * @var bool
     */
    private $booleen5;

    /**
     * Get the booleen5.
     *
     * @return bool Returns the booleen5.
     */
    public function getBooleen5() {
        return $this->booleen5;
    }

    /**
     * Set the booleen5.
     *
     * @param bool $booleen5 The booleen5.
     */
    public function setBooleen5($booleen5) {
        $this->booleen5 = $booleen5;
        return $this;
    }
}
