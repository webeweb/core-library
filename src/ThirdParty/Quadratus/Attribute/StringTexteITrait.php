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
 * Texte i trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteITrait {

    /**
     * Texte i.
     *
     * @var string
     */
    private $texteI;

    /**
     * Get the texte i.
     *
     * @return string Returns the texte i.
     */
    public function getTexteI() {
        return $this->texteI;
    }

    /**
     * Set the texte i.
     *
     * @param string $texteI The texte i.
     */
    public function setTexteI($texteI) {
        $this->texteI = $texteI;
        return $this;
    }
}
