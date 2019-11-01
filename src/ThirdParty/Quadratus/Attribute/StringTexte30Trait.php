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
 * Texte30 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte30Trait {

    /**
     * Texte30.
     *
     * @var string
     */
    private $texte30;

    /**
     * Get the texte30.
     *
     * @return string Returns the texte30.
     */
    public function getTexte30() {
        return $this->texte30;
    }

    /**
     * Set the texte30.
     *
     * @param string $texte30 The texte30.
     */
    public function setTexte30($texte30) {
        $this->texte30 = $texte30;
        return $this;
    }
}
