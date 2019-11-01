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
 * Texte32 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte32Trait {

    /**
     * Texte32.
     *
     * @var string
     */
    private $texte32;

    /**
     * Get the texte32.
     *
     * @return string Returns the texte32.
     */
    public function getTexte32() {
        return $this->texte32;
    }

    /**
     * Set the texte32.
     *
     * @param string $texte32 The texte32.
     */
    public function setTexte32($texte32) {
        $this->texte32 = $texte32;
        return $this;
    }
}
