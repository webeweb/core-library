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
 * Texte14 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte14Trait {

    /**
     * Texte14.
     *
     * @var string
     */
    private $texte14;

    /**
     * Get the texte14.
     *
     * @return string Returns the texte14.
     */
    public function getTexte14() {
        return $this->texte14;
    }

    /**
     * Set the texte14.
     *
     * @param string $texte14 The texte14.
     */
    public function setTexte14($texte14) {
        $this->texte14 = $texte14;
        return $this;
    }
}
