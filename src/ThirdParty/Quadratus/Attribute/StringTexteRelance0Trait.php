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
 * Texte relance0 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteRelance0Trait {

    /**
     * Texte relance0.
     *
     * @var string
     */
    private $texteRelance0;

    /**
     * Get the texte relance0.
     *
     * @return string Returns the texte relance0.
     */
    public function getTexteRelance0() {
        return $this->texteRelance0;
    }

    /**
     * Set the texte relance0.
     *
     * @param string $texteRelance0 The texte relance0.
     */
    public function setTexteRelance0($texteRelance0) {
        $this->texteRelance0 = $texteRelance0;
        return $this;
    }
}
