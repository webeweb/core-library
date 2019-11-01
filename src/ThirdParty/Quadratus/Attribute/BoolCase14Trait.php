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
 * Case14 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase14Trait {

    /**
     * Case14.
     *
     * @var bool
     */
    private $case14;

    /**
     * Get the case14.
     *
     * @return bool Returns the case14.
     */
    public function getCase14() {
        return $this->case14;
    }

    /**
     * Set the case14.
     *
     * @param bool $case14 The case14.
     */
    public function setCase14($case14) {
        $this->case14 = $case14;
        return $this;
    }
}
