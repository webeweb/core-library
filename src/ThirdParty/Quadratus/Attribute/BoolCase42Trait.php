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
 * Case42 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase42Trait {

    /**
     * Case42.
     *
     * @var bool
     */
    private $case42;

    /**
     * Get the case42.
     *
     * @return bool Returns the case42.
     */
    public function getCase42() {
        return $this->case42;
    }

    /**
     * Set the case42.
     *
     * @param bool $case42 The case42.
     */
    public function setCase42($case42) {
        $this->case42 = $case42;
        return $this;
    }
}
