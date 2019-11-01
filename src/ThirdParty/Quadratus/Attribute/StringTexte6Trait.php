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
 * Texte6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte6Trait {

    /**
     * Texte6.
     *
     * @var string
     */
    private $texte6;

    /**
     * Get the texte6.
     *
     * @return string Returns the texte6.
     */
    public function getTexte6() {
        return $this->texte6;
    }

    /**
     * Set the texte6.
     *
     * @param string $texte6 The texte6.
     */
    public function setTexte6($texte6) {
        $this->texte6 = $texte6;
        return $this;
    }
}
