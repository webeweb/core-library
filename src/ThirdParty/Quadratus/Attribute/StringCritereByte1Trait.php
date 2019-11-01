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
 * Critere byte1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCritereByte1Trait {

    /**
     * Critere byte1.
     *
     * @var string
     */
    private $critereByte1;

    /**
     * Get the critere byte1.
     *
     * @return string Returns the critere byte1.
     */
    public function getCritereByte1() {
        return $this->critereByte1;
    }

    /**
     * Set the critere byte1.
     *
     * @param string $critereByte1 The critere byte1.
     */
    public function setCritereByte1($critereByte1) {
        $this->critereByte1 = $critereByte1;
        return $this;
    }
}
