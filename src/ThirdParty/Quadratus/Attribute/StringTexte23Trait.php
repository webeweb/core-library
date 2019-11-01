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
 * Texte23 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte23Trait {

    /**
     * Texte23.
     *
     * @var string
     */
    private $texte23;

    /**
     * Get the texte23.
     *
     * @return string Returns the texte23.
     */
    public function getTexte23() {
        return $this->texte23;
    }

    /**
     * Set the texte23.
     *
     * @param string $texte23 The texte23.
     */
    public function setTexte23($texte23) {
        $this->texte23 = $texte23;
        return $this;
    }
}
