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
 * Texte4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte4Trait {

    /**
     * Texte4.
     *
     * @var string
     */
    private $texte4;

    /**
     * Get the texte4.
     *
     * @return string Returns the texte4.
     */
    public function getTexte4() {
        return $this->texte4;
    }

    /**
     * Set the texte4.
     *
     * @param string $texte4 The texte4.
     */
    public function setTexte4($texte4) {
        $this->texte4 = $texte4;
        return $this;
    }
}
