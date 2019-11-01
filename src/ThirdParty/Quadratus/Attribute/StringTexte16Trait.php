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
 * Texte16 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte16Trait {

    /**
     * Texte16.
     *
     * @var string
     */
    private $texte16;

    /**
     * Get the texte16.
     *
     * @return string Returns the texte16.
     */
    public function getTexte16() {
        return $this->texte16;
    }

    /**
     * Set the texte16.
     *
     * @param string $texte16 The texte16.
     */
    public function setTexte16($texte16) {
        $this->texte16 = $texte16;
        return $this;
    }
}
