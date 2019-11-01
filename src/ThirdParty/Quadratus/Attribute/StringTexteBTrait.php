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
 * Texte b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteBTrait {

    /**
     * Texte b.
     *
     * @var string
     */
    private $texteB;

    /**
     * Get the texte b.
     *
     * @return string Returns the texte b.
     */
    public function getTexteB() {
        return $this->texteB;
    }

    /**
     * Set the texte b.
     *
     * @param string $texteB The texte b.
     */
    public function setTexteB($texteB) {
        $this->texteB = $texteB;
        return $this;
    }
}
