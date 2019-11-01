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
 * Texte24 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte24Trait {

    /**
     * Texte24.
     *
     * @var string
     */
    private $texte24;

    /**
     * Get the texte24.
     *
     * @return string Returns the texte24.
     */
    public function getTexte24() {
        return $this->texte24;
    }

    /**
     * Set the texte24.
     *
     * @param string $texte24 The texte24.
     */
    public function setTexte24($texte24) {
        $this->texte24 = $texte24;
        return $this;
    }
}
