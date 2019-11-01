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
 * Case39 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase39Trait {

    /**
     * Case39.
     *
     * @var bool
     */
    private $case39;

    /**
     * Get the case39.
     *
     * @return bool Returns the case39.
     */
    public function getCase39() {
        return $this->case39;
    }

    /**
     * Set the case39.
     *
     * @param bool $case39 The case39.
     */
    public function setCase39($case39) {
        $this->case39 = $case39;
        return $this;
    }
}
