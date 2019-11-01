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
 * Texte5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte5Trait {

    /**
     * Texte5.
     *
     * @var string
     */
    private $texte5;

    /**
     * Get the texte5.
     *
     * @return string Returns the texte5.
     */
    public function getTexte5() {
        return $this->texte5;
    }

    /**
     * Set the texte5.
     *
     * @param string $texte5 The texte5.
     */
    public function setTexte5($texte5) {
        $this->texte5 = $texte5;
        return $this;
    }
}
