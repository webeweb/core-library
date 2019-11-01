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
 * Case12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase12Trait {

    /**
     * Case12.
     *
     * @var bool
     */
    private $case12;

    /**
     * Get the case12.
     *
     * @return bool Returns the case12.
     */
    public function getCase12() {
        return $this->case12;
    }

    /**
     * Set the case12.
     *
     * @param bool $case12 The case12.
     */
    public function setCase12($case12) {
        $this->case12 = $case12;
        return $this;
    }
}
