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
 * Texte15 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte15Trait {

    /**
     * Texte15.
     *
     * @var string
     */
    private $texte15;

    /**
     * Get the texte15.
     *
     * @return string Returns the texte15.
     */
    public function getTexte15() {
        return $this->texte15;
    }

    /**
     * Set the texte15.
     *
     * @param string $texte15 The texte15.
     */
    public function setTexte15($texte15) {
        $this->texte15 = $texte15;
        return $this;
    }
}
