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
 * Case2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase2Trait {

    /**
     * Case2.
     *
     * @var bool
     */
    private $case2;

    /**
     * Get the case2.
     *
     * @return bool Returns the case2.
     */
    public function getCase2() {
        return $this->case2;
    }

    /**
     * Set the case2.
     *
     * @param bool $case2 The case2.
     */
    public function setCase2($case2) {
        $this->case2 = $case2;
        return $this;
    }
}
