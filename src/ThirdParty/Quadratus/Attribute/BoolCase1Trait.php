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
 * Case1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase1Trait {

    /**
     * Case1.
     *
     * @var bool
     */
    private $case1;

    /**
     * Get the case1.
     *
     * @return bool Returns the case1.
     */
    public function getCase1() {
        return $this->case1;
    }

    /**
     * Set the case1.
     *
     * @param bool $case1 The case1.
     */
    public function setCase1($case1) {
        $this->case1 = $case1;
        return $this;
    }
}
