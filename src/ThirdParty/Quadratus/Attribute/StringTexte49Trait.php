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
 * Texte49 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte49Trait {

    /**
     * Texte49.
     *
     * @var string
     */
    private $texte49;

    /**
     * Get the texte49.
     *
     * @return string Returns the texte49.
     */
    public function getTexte49() {
        return $this->texte49;
    }

    /**
     * Set the texte49.
     *
     * @param string $texte49 The texte49.
     */
    public function setTexte49($texte49) {
        $this->texte49 = $texte49;
        return $this;
    }
}
