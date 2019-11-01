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
 * Texte43 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte43Trait {

    /**
     * Texte43.
     *
     * @var string
     */
    private $texte43;

    /**
     * Get the texte43.
     *
     * @return string Returns the texte43.
     */
    public function getTexte43() {
        return $this->texte43;
    }

    /**
     * Set the texte43.
     *
     * @param string $texte43 The texte43.
     */
    public function setTexte43($texte43) {
        $this->texte43 = $texte43;
        return $this;
    }
}
