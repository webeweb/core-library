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
 * Case6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase6Trait {

    /**
     * Case6.
     *
     * @var bool
     */
    private $case6;

    /**
     * Get the case6.
     *
     * @return bool Returns the case6.
     */
    public function getCase6() {
        return $this->case6;
    }

    /**
     * Set the case6.
     *
     * @param bool $case6 The case6.
     */
    public function setCase6($case6) {
        $this->case6 = $case6;
        return $this;
    }
}
