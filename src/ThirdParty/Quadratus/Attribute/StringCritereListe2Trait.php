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
 * Critere liste2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCritereListe2Trait {

    /**
     * Critere liste2.
     *
     * @var string
     */
    private $critereListe2;

    /**
     * Get the critere liste2.
     *
     * @return string Returns the critere liste2.
     */
    public function getCritereListe2() {
        return $this->critereListe2;
    }

    /**
     * Set the critere liste2.
     *
     * @param string $critereListe2 The critere liste2.
     */
    public function setCritereListe2($critereListe2) {
        $this->critereListe2 = $critereListe2;
        return $this;
    }
}
