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
 * Texte36 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte36Trait {

    /**
     * Texte36.
     *
     * @var string
     */
    private $texte36;

    /**
     * Get the texte36.
     *
     * @return string Returns the texte36.
     */
    public function getTexte36() {
        return $this->texte36;
    }

    /**
     * Set the texte36.
     *
     * @param string $texte36 The texte36.
     */
    public function setTexte36($texte36) {
        $this->texte36 = $texte36;
        return $this;
    }
}
