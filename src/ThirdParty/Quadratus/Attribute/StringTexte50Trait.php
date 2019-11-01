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
 * Texte50 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte50Trait {

    /**
     * Texte50.
     *
     * @var string
     */
    private $texte50;

    /**
     * Get the texte50.
     *
     * @return string Returns the texte50.
     */
    public function getTexte50() {
        return $this->texte50;
    }

    /**
     * Set the texte50.
     *
     * @param string $texte50 The texte50.
     */
    public function setTexte50($texte50) {
        $this->texte50 = $texte50;
        return $this;
    }
}
