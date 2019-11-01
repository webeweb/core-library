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
 * Critere liste1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCritereListe1Trait {

    /**
     * Critere liste1.
     *
     * @var string
     */
    private $critereListe1;

    /**
     * Get the critere liste1.
     *
     * @return string Returns the critere liste1.
     */
    public function getCritereListe1() {
        return $this->critereListe1;
    }

    /**
     * Set the critere liste1.
     *
     * @param string $critereListe1 The critere liste1.
     */
    public function setCritereListe1($critereListe1) {
        $this->critereListe1 = $critereListe1;
        return $this;
    }
}
