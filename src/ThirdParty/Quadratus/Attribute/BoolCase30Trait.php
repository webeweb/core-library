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
 * Case30 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase30Trait {

    /**
     * Case30.
     *
     * @var bool
     */
    private $case30;

    /**
     * Get the case30.
     *
     * @return bool Returns the case30.
     */
    public function getCase30() {
        return $this->case30;
    }

    /**
     * Set the case30.
     *
     * @param bool $case30 The case30.
     */
    public function setCase30($case30) {
        $this->case30 = $case30;
        return $this;
    }
}
