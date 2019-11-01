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
 * Texte45 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte45Trait {

    /**
     * Texte45.
     *
     * @var string
     */
    private $texte45;

    /**
     * Get the texte45.
     *
     * @return string Returns the texte45.
     */
    public function getTexte45() {
        return $this->texte45;
    }

    /**
     * Set the texte45.
     *
     * @param string $texte45 The texte45.
     */
    public function setTexte45($texte45) {
        $this->texte45 = $texte45;
        return $this;
    }
}
