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
 * Texte44 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte44Trait {

    /**
     * Texte44.
     *
     * @var string
     */
    private $texte44;

    /**
     * Get the texte44.
     *
     * @return string Returns the texte44.
     */
    public function getTexte44() {
        return $this->texte44;
    }

    /**
     * Set the texte44.
     *
     * @param string $texte44 The texte44.
     */
    public function setTexte44($texte44) {
        $this->texte44 = $texte44;
        return $this;
    }
}
