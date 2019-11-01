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
 * Case36 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase36Trait {

    /**
     * Case36.
     *
     * @var bool
     */
    private $case36;

    /**
     * Get the case36.
     *
     * @return bool Returns the case36.
     */
    public function getCase36() {
        return $this->case36;
    }

    /**
     * Set the case36.
     *
     * @param bool $case36 The case36.
     */
    public function setCase36($case36) {
        $this->case36 = $case36;
        return $this;
    }
}
