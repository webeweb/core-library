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
 * Texte k trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteKTrait {

    /**
     * Texte k.
     *
     * @var string
     */
    private $texteK;

    /**
     * Get the texte k.
     *
     * @return string Returns the texte k.
     */
    public function getTexteK() {
        return $this->texteK;
    }

    /**
     * Set the texte k.
     *
     * @param string $texteK The texte k.
     */
    public function setTexteK($texteK) {
        $this->texteK = $texteK;
        return $this;
    }
}
