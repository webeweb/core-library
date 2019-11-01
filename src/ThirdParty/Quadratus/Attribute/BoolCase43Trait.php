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
 * Case43 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase43Trait {

    /**
     * Case43.
     *
     * @var bool
     */
    private $case43;

    /**
     * Get the case43.
     *
     * @return bool Returns the case43.
     */
    public function getCase43() {
        return $this->case43;
    }

    /**
     * Set the case43.
     *
     * @param bool $case43 The case43.
     */
    public function setCase43($case43) {
        $this->case43 = $case43;
        return $this;
    }
}
