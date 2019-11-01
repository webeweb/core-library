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
 * Texte f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteFTrait {

    /**
     * Texte f.
     *
     * @var string
     */
    private $texteF;

    /**
     * Get the texte f.
     *
     * @return string Returns the texte f.
     */
    public function getTexteF() {
        return $this->texteF;
    }

    /**
     * Set the texte f.
     *
     * @param string $texteF The texte f.
     */
    public function setTexteF($texteF) {
        $this->texteF = $texteF;
        return $this;
    }
}
