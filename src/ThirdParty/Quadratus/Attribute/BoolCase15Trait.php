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
 * Case15 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase15Trait {

    /**
     * Case15.
     *
     * @var bool
     */
    private $case15;

    /**
     * Get the case15.
     *
     * @return bool Returns the case15.
     */
    public function getCase15() {
        return $this->case15;
    }

    /**
     * Set the case15.
     *
     * @param bool $case15 The case15.
     */
    public function setCase15($case15) {
        $this->case15 = $case15;
        return $this;
    }
}
