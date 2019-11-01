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
 * Texte46 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte46Trait {

    /**
     * Texte46.
     *
     * @var string
     */
    private $texte46;

    /**
     * Get the texte46.
     *
     * @return string Returns the texte46.
     */
    public function getTexte46() {
        return $this->texte46;
    }

    /**
     * Set the texte46.
     *
     * @param string $texte46 The texte46.
     */
    public function setTexte46($texte46) {
        $this->texte46 = $texte46;
        return $this;
    }
}
