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
 * Majoration h plus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMajorationHPlusTrait {

    /**
     * Majoration h plus.
     *
     * @var string
     */
    private $majorationHPlus;

    /**
     * Get the majoration h plus.
     *
     * @return string Returns the majoration h plus.
     */
    public function getMajorationHPlus() {
        return $this->majorationHPlus;
    }

    /**
     * Set the majoration h plus.
     *
     * @param string $majorationHPlus The majoration h plus.
     */
    public function setMajorationHPlus($majorationHPlus) {
        $this->majorationHPlus = $majorationHPlus;
        return $this;
    }
}
