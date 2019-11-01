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
 * Texte40 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte40Trait {

    /**
     * Texte40.
     *
     * @var string
     */
    private $texte40;

    /**
     * Get the texte40.
     *
     * @return string Returns the texte40.
     */
    public function getTexte40() {
        return $this->texte40;
    }

    /**
     * Set the texte40.
     *
     * @param string $texte40 The texte40.
     */
    public function setTexte40($texte40) {
        $this->texte40 = $texte40;
        return $this;
    }
}
