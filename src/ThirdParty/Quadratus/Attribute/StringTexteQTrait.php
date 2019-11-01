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
 * Texte q trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteQTrait {

    /**
     * Texte q.
     *
     * @var string
     */
    private $texteQ;

    /**
     * Get the texte q.
     *
     * @return string Returns the texte q.
     */
    public function getTexteQ() {
        return $this->texteQ;
    }

    /**
     * Set the texte q.
     *
     * @param string $texteQ The texte q.
     */
    public function setTexteQ($texteQ) {
        $this->texteQ = $texteQ;
        return $this;
    }
}
