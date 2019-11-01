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
 * Case10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase10Trait {

    /**
     * Case10.
     *
     * @var bool
     */
    private $case10;

    /**
     * Get the case10.
     *
     * @return bool Returns the case10.
     */
    public function getCase10() {
        return $this->case10;
    }

    /**
     * Set the case10.
     *
     * @param bool $case10 The case10.
     */
    public function setCase10($case10) {
        $this->case10 = $case10;
        return $this;
    }
}
