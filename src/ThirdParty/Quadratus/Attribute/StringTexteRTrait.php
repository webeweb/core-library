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
 * Texte r trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteRTrait {

    /**
     * Texte r.
     *
     * @var string
     */
    private $texteR;

    /**
     * Get the texte r.
     *
     * @return string Returns the texte r.
     */
    public function getTexteR() {
        return $this->texteR;
    }

    /**
     * Set the texte r.
     *
     * @param string $texteR The texte r.
     */
    public function setTexteR($texteR) {
        $this->texteR = $texteR;
        return $this;
    }
}
