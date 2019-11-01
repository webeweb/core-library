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
 * Texte relance1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteRelance1Trait {

    /**
     * Texte relance1.
     *
     * @var string
     */
    private $texteRelance1;

    /**
     * Get the texte relance1.
     *
     * @return string Returns the texte relance1.
     */
    public function getTexteRelance1() {
        return $this->texteRelance1;
    }

    /**
     * Set the texte relance1.
     *
     * @param string $texteRelance1 The texte relance1.
     */
    public function setTexteRelance1($texteRelance1) {
        $this->texteRelance1 = $texteRelance1;
        return $this;
    }
}
