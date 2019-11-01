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
 * Texte m trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteMTrait {

    /**
     * Texte m.
     *
     * @var string
     */
    private $texteM;

    /**
     * Get the texte m.
     *
     * @return string Returns the texte m.
     */
    public function getTexteM() {
        return $this->texteM;
    }

    /**
     * Set the texte m.
     *
     * @param string $texteM The texte m.
     */
    public function setTexteM($texteM) {
        $this->texteM = $texteM;
        return $this;
    }
}
