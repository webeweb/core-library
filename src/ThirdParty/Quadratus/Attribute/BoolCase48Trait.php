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
 * Case48 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase48Trait {

    /**
     * Case48.
     *
     * @var bool
     */
    private $case48;

    /**
     * Get the case48.
     *
     * @return bool Returns the case48.
     */
    public function getCase48() {
        return $this->case48;
    }

    /**
     * Set the case48.
     *
     * @param bool $case48 The case48.
     */
    public function setCase48($case48) {
        $this->case48 = $case48;
        return $this;
    }
}
