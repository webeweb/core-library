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
 * Texte42 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte42Trait {

    /**
     * Texte42.
     *
     * @var string
     */
    private $texte42;

    /**
     * Get the texte42.
     *
     * @return string Returns the texte42.
     */
    public function getTexte42() {
        return $this->texte42;
    }

    /**
     * Set the texte42.
     *
     * @param string $texte42 The texte42.
     */
    public function setTexte42($texte42) {
        $this->texte42 = $texte42;
        return $this;
    }
}
