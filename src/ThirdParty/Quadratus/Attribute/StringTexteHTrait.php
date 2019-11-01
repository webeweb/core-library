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
 * Texte h trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteHTrait {

    /**
     * Texte h.
     *
     * @var string
     */
    private $texteH;

    /**
     * Get the texte h.
     *
     * @return string Returns the texte h.
     */
    public function getTexteH() {
        return $this->texteH;
    }

    /**
     * Set the texte h.
     *
     * @param string $texteH The texte h.
     */
    public function setTexteH($texteH) {
        $this->texteH = $texteH;
        return $this;
    }
}
