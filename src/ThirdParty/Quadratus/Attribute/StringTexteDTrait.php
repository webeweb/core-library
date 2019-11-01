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
 * Texte d trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteDTrait {

    /**
     * Texte d.
     *
     * @var string
     */
    private $texteD;

    /**
     * Get the texte d.
     *
     * @return string Returns the texte d.
     */
    public function getTexteD() {
        return $this->texteD;
    }

    /**
     * Set the texte d.
     *
     * @param string $texteD The texte d.
     */
    public function setTexteD($texteD) {
        $this->texteD = $texteD;
        return $this;
    }
}
