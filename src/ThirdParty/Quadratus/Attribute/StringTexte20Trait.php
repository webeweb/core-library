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
 * Texte20 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte20Trait {

    /**
     * Texte20.
     *
     * @var string
     */
    private $texte20;

    /**
     * Get the texte20.
     *
     * @return string Returns the texte20.
     */
    public function getTexte20() {
        return $this->texte20;
    }

    /**
     * Set the texte20.
     *
     * @param string $texte20 The texte20.
     */
    public function setTexte20($texte20) {
        $this->texte20 = $texte20;
        return $this;
    }
}
