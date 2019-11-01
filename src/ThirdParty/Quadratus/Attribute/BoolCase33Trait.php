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
 * Case33 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase33Trait {

    /**
     * Case33.
     *
     * @var bool
     */
    private $case33;

    /**
     * Get the case33.
     *
     * @return bool Returns the case33.
     */
    public function getCase33() {
        return $this->case33;
    }

    /**
     * Set the case33.
     *
     * @param bool $case33 The case33.
     */
    public function setCase33($case33) {
        $this->case33 = $case33;
        return $this;
    }
}
