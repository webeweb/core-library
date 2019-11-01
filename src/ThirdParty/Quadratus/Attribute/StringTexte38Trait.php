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
 * Texte38 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte38Trait {

    /**
     * Texte38.
     *
     * @var string
     */
    private $texte38;

    /**
     * Get the texte38.
     *
     * @return string Returns the texte38.
     */
    public function getTexte38() {
        return $this->texte38;
    }

    /**
     * Set the texte38.
     *
     * @param string $texte38 The texte38.
     */
    public function setTexte38($texte38) {
        $this->texte38 = $texte38;
        return $this;
    }
}
