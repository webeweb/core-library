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
 * Texte26 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte26Trait {

    /**
     * Texte26.
     *
     * @var string
     */
    private $texte26;

    /**
     * Get the texte26.
     *
     * @return string Returns the texte26.
     */
    public function getTexte26() {
        return $this->texte26;
    }

    /**
     * Set the texte26.
     *
     * @param string $texte26 The texte26.
     */
    public function setTexte26($texte26) {
        $this->texte26 = $texte26;
        return $this;
    }
}
