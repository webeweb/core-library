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
 * Texte21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte21Trait {

    /**
     * Texte21.
     *
     * @var string
     */
    private $texte21;

    /**
     * Get the texte21.
     *
     * @return string Returns the texte21.
     */
    public function getTexte21() {
        return $this->texte21;
    }

    /**
     * Set the texte21.
     *
     * @param string $texte21 The texte21.
     */
    public function setTexte21($texte21) {
        $this->texte21 = $texte21;
        return $this;
    }
}
