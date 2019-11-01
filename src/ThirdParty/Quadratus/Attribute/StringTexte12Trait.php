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
 * Texte12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte12Trait {

    /**
     * Texte12.
     *
     * @var string
     */
    private $texte12;

    /**
     * Get the texte12.
     *
     * @return string Returns the texte12.
     */
    public function getTexte12() {
        return $this->texte12;
    }

    /**
     * Set the texte12.
     *
     * @param string $texte12 The texte12.
     */
    public function setTexte12($texte12) {
        $this->texte12 = $texte12;
        return $this;
    }
}
