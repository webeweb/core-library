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
 * Booleen9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBooleen9Trait {

    /**
     * Booleen9.
     *
     * @var bool
     */
    private $booleen9;

    /**
     * Get the booleen9.
     *
     * @return bool Returns the booleen9.
     */
    public function getBooleen9() {
        return $this->booleen9;
    }

    /**
     * Set the booleen9.
     *
     * @param bool $booleen9 The booleen9.
     */
    public function setBooleen9($booleen9) {
        $this->booleen9 = $booleen9;
        return $this;
    }
}
