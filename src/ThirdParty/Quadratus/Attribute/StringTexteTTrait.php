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
 * Texte t trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteTTrait {

    /**
     * Texte t.
     *
     * @var string
     */
    private $texteT;

    /**
     * Get the texte t.
     *
     * @return string Returns the texte t.
     */
    public function getTexteT() {
        return $this->texteT;
    }

    /**
     * Set the texte t.
     *
     * @param string $texteT The texte t.
     */
    public function setTexteT($texteT) {
        $this->texteT = $texteT;
        return $this;
    }
}
