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
 * Case4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase4Trait {

    /**
     * Case4.
     *
     * @var bool
     */
    private $case4;

    /**
     * Get the case4.
     *
     * @return bool Returns the case4.
     */
    public function getCase4() {
        return $this->case4;
    }

    /**
     * Set the case4.
     *
     * @param bool $case4 The case4.
     */
    public function setCase4($case4) {
        $this->case4 = $case4;
        return $this;
    }
}
