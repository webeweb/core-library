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
 * Texte relance3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteRelance3Trait {

    /**
     * Texte relance3.
     *
     * @var string
     */
    private $texteRelance3;

    /**
     * Get the texte relance3.
     *
     * @return string Returns the texte relance3.
     */
    public function getTexteRelance3() {
        return $this->texteRelance3;
    }

    /**
     * Set the texte relance3.
     *
     * @param string $texteRelance3 The texte relance3.
     */
    public function setTexteRelance3($texteRelance3) {
        $this->texteRelance3 = $texteRelance3;
        return $this;
    }
}
