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
 * Critere bool1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCritereBool1Trait {

    /**
     * Critere bool1.
     *
     * @var bool
     */
    private $critereBool1;

    /**
     * Get the critere bool1.
     *
     * @return bool Returns the critere bool1.
     */
    public function getCritereBool1() {
        return $this->critereBool1;
    }

    /**
     * Set the critere bool1.
     *
     * @param bool $critereBool1 The critere bool1.
     */
    public function setCritereBool1($critereBool1) {
        $this->critereBool1 = $critereBool1;
        return $this;
    }
}
