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
 * Fonctionnement cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFonctionnementCgaTrait {

    /**
     * Fonctionnement cga.
     *
     * @var bool
     */
    private $fonctionnementCga;

    /**
     * Get the fonctionnement cga.
     *
     * @return bool Returns the fonctionnement cga.
     */
    public function getFonctionnementCga() {
        return $this->fonctionnementCga;
    }

    /**
     * Set the fonctionnement cga.
     *
     * @param bool $fonctionnementCga The fonctionnement cga.
     */
    public function setFonctionnementCga($fonctionnementCga) {
        $this->fonctionnementCga = $fonctionnementCga;
        return $this;
    }
}
