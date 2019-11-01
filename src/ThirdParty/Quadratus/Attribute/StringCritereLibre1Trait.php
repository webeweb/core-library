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
 * Critere libre1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCritereLibre1Trait {

    /**
     * Critere libre1.
     *
     * @var string
     */
    private $critereLibre1;

    /**
     * Get the critere libre1.
     *
     * @return string Returns the critere libre1.
     */
    public function getCritereLibre1() {
        return $this->critereLibre1;
    }

    /**
     * Set the critere libre1.
     *
     * @param string $critereLibre1 The critere libre1.
     */
    public function setCritereLibre1($critereLibre1) {
        $this->critereLibre1 = $critereLibre1;
        return $this;
    }
}
