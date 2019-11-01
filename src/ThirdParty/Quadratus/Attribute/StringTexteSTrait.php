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
 * Texte s trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteSTrait {

    /**
     * Texte s.
     *
     * @var string
     */
    private $texteS;

    /**
     * Get the texte s.
     *
     * @return string Returns the texte s.
     */
    public function getTexteS() {
        return $this->texteS;
    }

    /**
     * Set the texte s.
     *
     * @param string $texteS The texte s.
     */
    public function setTexteS($texteS) {
        $this->texteS = $texteS;
        return $this;
    }
}
