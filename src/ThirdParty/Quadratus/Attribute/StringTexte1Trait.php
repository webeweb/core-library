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
 * Texte1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte1Trait {

    /**
     * Texte1.
     *
     * @var string
     */
    private $texte1;

    /**
     * Get the texte1.
     *
     * @return string Returns the texte1.
     */
    public function getTexte1() {
        return $this->texte1;
    }

    /**
     * Set the texte1.
     *
     * @param string $texte1 The texte1.
     */
    public function setTexte1($texte1) {
        $this->texte1 = $texte1;
        return $this;
    }
}
