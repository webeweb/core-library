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
 * Texte19 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexte19Trait {

    /**
     * Texte19.
     *
     * @var string
     */
    private $texte19;

    /**
     * Get the texte19.
     *
     * @return string Returns the texte19.
     */
    public function getTexte19() {
        return $this->texte19;
    }

    /**
     * Set the texte19.
     *
     * @param string $texte19 The texte19.
     */
    public function setTexte19($texte19) {
        $this->texte19 = $texte19;
        return $this;
    }
}
