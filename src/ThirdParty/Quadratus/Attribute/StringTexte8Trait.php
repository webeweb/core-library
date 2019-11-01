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
 * Texte8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte8Trait {

    /**
     * Texte8.
     *
     * @var string
     */
    private $texte8;

    /**
     * Get the texte8.
     *
     * @return string Returns the texte8.
     */
    public function getTexte8() {
        return $this->texte8;
    }

    /**
     * Set the texte8.
     *
     * @param string $texte8 The texte8.
     */
    public function setTexte8($texte8) {
        $this->texte8 = $texte8;
        return $this;
    }
}
