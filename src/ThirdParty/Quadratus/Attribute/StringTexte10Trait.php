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
 * Texte10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte10Trait {

    /**
     * Texte10.
     *
     * @var string
     */
    private $texte10;

    /**
     * Get the texte10.
     *
     * @return string Returns the texte10.
     */
    public function getTexte10() {
        return $this->texte10;
    }

    /**
     * Set the texte10.
     *
     * @param string $texte10 The texte10.
     */
    public function setTexte10($texte10) {
        $this->texte10 = $texte10;
        return $this;
    }
}
