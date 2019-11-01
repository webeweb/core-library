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
 * Texte17 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte17Trait {

    /**
     * Texte17.
     *
     * @var string
     */
    private $texte17;

    /**
     * Get the texte17.
     *
     * @return string Returns the texte17.
     */
    public function getTexte17() {
        return $this->texte17;
    }

    /**
     * Set the texte17.
     *
     * @param string $texte17 The texte17.
     */
    public function setTexte17($texte17) {
        $this->texte17 = $texte17;
        return $this;
    }
}
