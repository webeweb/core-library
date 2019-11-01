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
 * Texte41 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte41Trait {

    /**
     * Texte41.
     *
     * @var string
     */
    private $texte41;

    /**
     * Get the texte41.
     *
     * @return string Returns the texte41.
     */
    public function getTexte41() {
        return $this->texte41;
    }

    /**
     * Set the texte41.
     *
     * @param string $texte41 The texte41.
     */
    public function setTexte41($texte41) {
        $this->texte41 = $texte41;
        return $this;
    }
}
