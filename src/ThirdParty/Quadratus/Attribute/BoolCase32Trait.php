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
 * Case32 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase32Trait {

    /**
     * Case32.
     *
     * @var bool
     */
    private $case32;

    /**
     * Get the case32.
     *
     * @return bool Returns the case32.
     */
    public function getCase32() {
        return $this->case32;
    }

    /**
     * Set the case32.
     *
     * @param bool $case32 The case32.
     */
    public function setCase32($case32) {
        $this->case32 = $case32;
        return $this;
    }
}
