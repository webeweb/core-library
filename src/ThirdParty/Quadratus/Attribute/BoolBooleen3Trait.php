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
 * Booleen3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBooleen3Trait {

    /**
     * Booleen3.
     *
     * @var bool
     */
    private $booleen3;

    /**
     * Get the booleen3.
     *
     * @return bool Returns the booleen3.
     */
    public function getBooleen3() {
        return $this->booleen3;
    }

    /**
     * Set the booleen3.
     *
     * @param bool $booleen3 The booleen3.
     */
    public function setBooleen3($booleen3) {
        $this->booleen3 = $booleen3;
        return $this;
    }
}
