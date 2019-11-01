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
 * Texte p trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTextePTrait {

    /**
     * Texte p.
     *
     * @var string
     */
    private $texteP;

    /**
     * Get the texte p.
     *
     * @return string Returns the texte p.
     */
    public function getTexteP() {
        return $this->texteP;
    }

    /**
     * Set the texte p.
     *
     * @param string $texteP The texte p.
     */
    public function setTexteP($texteP) {
        $this->texteP = $texteP;
        return $this;
    }
}
