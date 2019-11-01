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
 * Texte27 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte27Trait {

    /**
     * Texte27.
     *
     * @var string
     */
    private $texte27;

    /**
     * Get the texte27.
     *
     * @return string Returns the texte27.
     */
    public function getTexte27() {
        return $this->texte27;
    }

    /**
     * Set the texte27.
     *
     * @param string $texte27 The texte27.
     */
    public function setTexte27($texte27) {
        $this->texte27 = $texte27;
        return $this;
    }
}
