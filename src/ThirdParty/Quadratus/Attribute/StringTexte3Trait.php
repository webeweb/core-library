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
 * Texte3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte3Trait {

    /**
     * Texte3.
     *
     * @var string
     */
    private $texte3;

    /**
     * Get the texte3.
     *
     * @return string Returns the texte3.
     */
    public function getTexte3() {
        return $this->texte3;
    }

    /**
     * Set the texte3.
     *
     * @param string $texte3 The texte3.
     */
    public function setTexte3($texte3) {
        $this->texte3 = $texte3;
        return $this;
    }
}
