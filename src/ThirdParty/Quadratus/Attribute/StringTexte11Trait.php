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
 * Texte11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte11Trait {

    /**
     * Texte11.
     *
     * @var string
     */
    private $texte11;

    /**
     * Get the texte11.
     *
     * @return string Returns the texte11.
     */
    public function getTexte11() {
        return $this->texte11;
    }

    /**
     * Set the texte11.
     *
     * @param string $texte11 The texte11.
     */
    public function setTexte11($texte11) {
        $this->texte11 = $texte11;
        return $this;
    }
}
