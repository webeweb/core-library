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
 * Texte relance2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteRelance2Trait {

    /**
     * Texte relance2.
     *
     * @var string
     */
    private $texteRelance2;

    /**
     * Get the texte relance2.
     *
     * @return string Returns the texte relance2.
     */
    public function getTexteRelance2() {
        return $this->texteRelance2;
    }

    /**
     * Set the texte relance2.
     *
     * @param string $texteRelance2 The texte relance2.
     */
    public function setTexteRelance2($texteRelance2) {
        $this->texteRelance2 = $texteRelance2;
        return $this;
    }
}
