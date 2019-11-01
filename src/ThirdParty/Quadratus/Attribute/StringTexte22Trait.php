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
 * Texte22 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte22Trait {

    /**
     * Texte22.
     *
     * @var string
     */
    private $texte22;

    /**
     * Get the texte22.
     *
     * @return string Returns the texte22.
     */
    public function getTexte22() {
        return $this->texte22;
    }

    /**
     * Set the texte22.
     *
     * @param string $texte22 The texte22.
     */
    public function setTexte22($texte22) {
        $this->texte22 = $texte22;
        return $this;
    }
}
