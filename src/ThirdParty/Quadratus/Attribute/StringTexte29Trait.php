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
 * Texte29 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte29Trait {

    /**
     * Texte29.
     *
     * @var string
     */
    private $texte29;

    /**
     * Get the texte29.
     *
     * @return string Returns the texte29.
     */
    public function getTexte29() {
        return $this->texte29;
    }

    /**
     * Set the texte29.
     *
     * @param string $texte29 The texte29.
     */
    public function setTexte29($texte29) {
        $this->texte29 = $texte29;
        return $this;
    }
}
