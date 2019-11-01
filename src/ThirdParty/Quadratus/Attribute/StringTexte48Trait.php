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
 * Texte48 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte48Trait {

    /**
     * Texte48.
     *
     * @var string
     */
    private $texte48;

    /**
     * Get the texte48.
     *
     * @return string Returns the texte48.
     */
    public function getTexte48() {
        return $this->texte48;
    }

    /**
     * Set the texte48.
     *
     * @param string $texte48 The texte48.
     */
    public function setTexte48($texte48) {
        $this->texte48 = $texte48;
        return $this;
    }
}
