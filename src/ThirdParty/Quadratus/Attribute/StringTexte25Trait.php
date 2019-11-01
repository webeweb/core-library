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
 * Texte25 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte25Trait {

    /**
     * Texte25.
     *
     * @var string
     */
    private $texte25;

    /**
     * Get the texte25.
     *
     * @return string Returns the texte25.
     */
    public function getTexte25() {
        return $this->texte25;
    }

    /**
     * Set the texte25.
     *
     * @param string $texte25 The texte25.
     */
    public function setTexte25($texte25) {
        $this->texte25 = $texte25;
        return $this;
    }
}
