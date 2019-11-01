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
 * Case7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase7Trait {

    /**
     * Case7.
     *
     * @var bool
     */
    private $case7;

    /**
     * Get the case7.
     *
     * @return bool Returns the case7.
     */
    public function getCase7() {
        return $this->case7;
    }

    /**
     * Set the case7.
     *
     * @param bool $case7 The case7.
     */
    public function setCase7($case7) {
        $this->case7 = $case7;
        return $this;
    }
}
