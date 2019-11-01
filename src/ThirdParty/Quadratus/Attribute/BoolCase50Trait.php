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
 * Case50 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase50Trait {

    /**
     * Case50.
     *
     * @var bool
     */
    private $case50;

    /**
     * Get the case50.
     *
     * @return bool Returns the case50.
     */
    public function getCase50() {
        return $this->case50;
    }

    /**
     * Set the case50.
     *
     * @param bool $case50 The case50.
     */
    public function setCase50($case50) {
        $this->case50 = $case50;
        return $this;
    }
}
