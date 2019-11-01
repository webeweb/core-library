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
 * Critere libre2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCritereLibre2Trait {

    /**
     * Critere libre2.
     *
     * @var string
     */
    private $critereLibre2;

    /**
     * Get the critere libre2.
     *
     * @return string Returns the critere libre2.
     */
    public function getCritereLibre2() {
        return $this->critereLibre2;
    }

    /**
     * Set the critere libre2.
     *
     * @param string $critereLibre2 The critere libre2.
     */
    public function setCritereLibre2($critereLibre2) {
        $this->critereLibre2 = $critereLibre2;
        return $this;
    }
}
