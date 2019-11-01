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
 * Texte c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteCTrait {

    /**
     * Texte c.
     *
     * @var string
     */
    private $texteC;

    /**
     * Get the texte c.
     *
     * @return string Returns the texte c.
     */
    public function getTexteC() {
        return $this->texteC;
    }

    /**
     * Set the texte c.
     *
     * @param string $texteC The texte c.
     */
    public function setTexteC($texteC) {
        $this->texteC = $texteC;
        return $this;
    }
}
