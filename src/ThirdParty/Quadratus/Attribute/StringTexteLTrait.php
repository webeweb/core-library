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
 * Texte l trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteLTrait {

    /**
     * Texte l.
     *
     * @var string
     */
    private $texteL;

    /**
     * Get the texte l.
     *
     * @return string Returns the texte l.
     */
    public function getTexteL() {
        return $this->texteL;
    }

    /**
     * Set the texte l.
     *
     * @param string $texteL The texte l.
     */
    public function setTexteL($texteL) {
        $this->texteL = $texteL;
        return $this;
    }
}
