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
 * Texte18 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte18Trait {

    /**
     * Texte18.
     *
     * @var string
     */
    private $texte18;

    /**
     * Get the texte18.
     *
     * @return string Returns the texte18.
     */
    public function getTexte18() {
        return $this->texte18;
    }

    /**
     * Set the texte18.
     *
     * @param string $texte18 The texte18.
     */
    public function setTexte18($texte18) {
        $this->texte18 = $texte18;
        return $this;
    }
}
