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
 * Fonctionnalite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFonctionnaliteTrait {

    /**
     * Fonctionnalite.
     *
     * @var string
     */
    private $fonctionnalite;

    /**
     * Get the fonctionnalite.
     *
     * @return string Returns the fonctionnalite.
     */
    public function getFonctionnalite() {
        return $this->fonctionnalite;
    }

    /**
     * Set the fonctionnalite.
     *
     * @param string $fonctionnalite The fonctionnalite.
     */
    public function setFonctionnalite($fonctionnalite) {
        $this->fonctionnalite = $fonctionnalite;
        return $this;
    }
}
