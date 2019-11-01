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
 * Critere bool2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCritereBool2Trait {

    /**
     * Critere bool2.
     *
     * @var bool
     */
    private $critereBool2;

    /**
     * Get the critere bool2.
     *
     * @return bool Returns the critere bool2.
     */
    public function getCritereBool2() {
        return $this->critereBool2;
    }

    /**
     * Set the critere bool2.
     *
     * @param bool $critereBool2 The critere bool2.
     */
    public function setCritereBool2($critereBool2) {
        $this->critereBool2 = $critereBool2;
        return $this;
    }
}
