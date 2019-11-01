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
 * Case31 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase31Trait {

    /**
     * Case31.
     *
     * @var bool
     */
    private $case31;

    /**
     * Get the case31.
     *
     * @return bool Returns the case31.
     */
    public function getCase31() {
        return $this->case31;
    }

    /**
     * Set the case31.
     *
     * @param bool $case31 The case31.
     */
    public function setCase31($case31) {
        $this->case31 = $case31;
        return $this;
    }
}
