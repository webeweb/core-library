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
 * Texte n trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteNTrait {

    /**
     * Texte n.
     *
     * @var string
     */
    private $texteN;

    /**
     * Get the texte n.
     *
     * @return string Returns the texte n.
     */
    public function getTexteN() {
        return $this->texteN;
    }

    /**
     * Set the texte n.
     *
     * @param string $texteN The texte n.
     */
    public function setTexteN($texteN) {
        $this->texteN = $texteN;
        return $this;
    }
}
