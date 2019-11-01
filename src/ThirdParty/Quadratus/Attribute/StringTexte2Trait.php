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
 * Texte2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte2Trait {

    /**
     * Texte2.
     *
     * @var string
     */
    private $texte2;

    /**
     * Get the texte2.
     *
     * @return string Returns the texte2.
     */
    public function getTexte2() {
        return $this->texte2;
    }

    /**
     * Set the texte2.
     *
     * @param string $texte2 The texte2.
     */
    public function setTexte2($texte2) {
        $this->texte2 = $texte2;
        return $this;
    }
}
