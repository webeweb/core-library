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
 * Texte31 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte31Trait {

    /**
     * Texte31.
     *
     * @var string
     */
    private $texte31;

    /**
     * Get the texte31.
     *
     * @return string Returns the texte31.
     */
    public function getTexte31() {
        return $this->texte31;
    }

    /**
     * Set the texte31.
     *
     * @param string $texte31 The texte31.
     */
    public function setTexte31($texte31) {
        $this->texte31 = $texte31;
        return $this;
    }
}
