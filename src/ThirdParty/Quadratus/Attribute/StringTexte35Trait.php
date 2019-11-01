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
 * Texte35 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte35Trait {

    /**
     * Texte35.
     *
     * @var string
     */
    private $texte35;

    /**
     * Get the texte35.
     *
     * @return string Returns the texte35.
     */
    public function getTexte35() {
        return $this->texte35;
    }

    /**
     * Set the texte35.
     *
     * @param string $texte35 The texte35.
     */
    public function setTexte35($texte35) {
        $this->texte35 = $texte35;
        return $this;
    }
}
