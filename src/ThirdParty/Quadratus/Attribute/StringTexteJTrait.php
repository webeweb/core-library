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
 * Texte j trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteJTrait {

    /**
     * Texte j.
     *
     * @var string
     */
    private $texteJ;

    /**
     * Get the texte j.
     *
     * @return string Returns the texte j.
     */
    public function getTexteJ() {
        return $this->texteJ;
    }

    /**
     * Set the texte j.
     *
     * @param string $texteJ The texte j.
     */
    public function setTexteJ($texteJ) {
        $this->texteJ = $texteJ;
        return $this;
    }
}
