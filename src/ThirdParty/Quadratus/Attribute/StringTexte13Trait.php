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
 * Texte13 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte13Trait {

    /**
     * Texte13.
     *
     * @var string
     */
    private $texte13;

    /**
     * Get the texte13.
     *
     * @return string Returns the texte13.
     */
    public function getTexte13() {
        return $this->texte13;
    }

    /**
     * Set the texte13.
     *
     * @param string $texte13 The texte13.
     */
    public function setTexte13($texte13) {
        $this->texte13 = $texte13;
        return $this;
    }
}
