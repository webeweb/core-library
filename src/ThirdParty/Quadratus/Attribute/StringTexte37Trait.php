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
 * Texte37 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte37Trait {

    /**
     * Texte37.
     *
     * @var string
     */
    private $texte37;

    /**
     * Get the texte37.
     *
     * @return string Returns the texte37.
     */
    public function getTexte37() {
        return $this->texte37;
    }

    /**
     * Set the texte37.
     *
     * @param string $texte37 The texte37.
     */
    public function setTexte37($texte37) {
        $this->texte37 = $texte37;
        return $this;
    }
}
