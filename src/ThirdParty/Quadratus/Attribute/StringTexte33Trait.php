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
 * Texte33 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte33Trait {

    /**
     * Texte33.
     *
     * @var string
     */
    private $texte33;

    /**
     * Get the texte33.
     *
     * @return string Returns the texte33.
     */
    public function getTexte33() {
        return $this->texte33;
    }

    /**
     * Set the texte33.
     *
     * @param string $texte33 The texte33.
     */
    public function setTexte33($texte33) {
        $this->texte33 = $texte33;
        return $this;
    }
}
