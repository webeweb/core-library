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
 * Texte28 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte28Trait {

    /**
     * Texte28.
     *
     * @var string
     */
    private $texte28;

    /**
     * Get the texte28.
     *
     * @return string Returns the texte28.
     */
    public function getTexte28() {
        return $this->texte28;
    }

    /**
     * Set the texte28.
     *
     * @param string $texte28 The texte28.
     */
    public function setTexte28($texte28) {
        $this->texte28 = $texte28;
        return $this;
    }
}
