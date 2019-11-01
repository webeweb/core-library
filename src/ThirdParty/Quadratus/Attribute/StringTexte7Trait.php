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
 * Texte7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte7Trait {

    /**
     * Texte7.
     *
     * @var string
     */
    private $texte7;

    /**
     * Get the texte7.
     *
     * @return string Returns the texte7.
     */
    public function getTexte7() {
        return $this->texte7;
    }

    /**
     * Set the texte7.
     *
     * @param string $texte7 The texte7.
     */
    public function setTexte7($texte7) {
        $this->texte7 = $texte7;
        return $this;
    }
}
