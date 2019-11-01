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
 * Texte39 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte39Trait {

    /**
     * Texte39.
     *
     * @var string
     */
    private $texte39;

    /**
     * Get the texte39.
     *
     * @return string Returns the texte39.
     */
    public function getTexte39() {
        return $this->texte39;
    }

    /**
     * Set the texte39.
     *
     * @param string $texte39 The texte39.
     */
    public function setTexte39($texte39) {
        $this->texte39 = $texte39;
        return $this;
    }
}
