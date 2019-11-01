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
 * Case5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase5Trait {

    /**
     * Case5.
     *
     * @var bool
     */
    private $case5;

    /**
     * Get the case5.
     *
     * @return bool Returns the case5.
     */
    public function getCase5() {
        return $this->case5;
    }

    /**
     * Set the case5.
     *
     * @param bool $case5 The case5.
     */
    public function setCase5($case5) {
        $this->case5 = $case5;
        return $this;
    }
}
