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
 * Texte9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte9Trait {

    /**
     * Texte9.
     *
     * @var string
     */
    private $texte9;

    /**
     * Get the texte9.
     *
     * @return string Returns the texte9.
     */
    public function getTexte9() {
        return $this->texte9;
    }

    /**
     * Set the texte9.
     *
     * @param string $texte9 The texte9.
     */
    public function setTexte9($texte9) {
        $this->texte9 = $texte9;
        return $this;
    }
}
