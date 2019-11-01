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
 * Texte a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteATrait {

    /**
     * Texte a.
     *
     * @var string
     */
    private $texteA;

    /**
     * Get the texte a.
     *
     * @return string Returns the texte a.
     */
    public function getTexteA() {
        return $this->texteA;
    }

    /**
     * Set the texte a.
     *
     * @param string $texteA The texte a.
     */
    public function setTexteA($texteA) {
        $this->texteA = $texteA;
        return $this;
    }
}
