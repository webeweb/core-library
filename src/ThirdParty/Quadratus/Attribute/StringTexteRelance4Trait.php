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
 * Texte relance4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteRelance4Trait {

    /**
     * Texte relance4.
     *
     * @var string
     */
    private $texteRelance4;

    /**
     * Get the texte relance4.
     *
     * @return string Returns the texte relance4.
     */
    public function getTexteRelance4() {
        return $this->texteRelance4;
    }

    /**
     * Set the texte relance4.
     *
     * @param string $texteRelance4 The texte relance4.
     */
    public function setTexteRelance4($texteRelance4) {
        $this->texteRelance4 = $texteRelance4;
        return $this;
    }
}
