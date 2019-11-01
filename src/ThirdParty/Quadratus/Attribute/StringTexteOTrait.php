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
 * Texte o trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteOTrait {

    /**
     * Texte o.
     *
     * @var string
     */
    private $texteO;

    /**
     * Get the texte o.
     *
     * @return string Returns the texte o.
     */
    public function getTexteO() {
        return $this->texteO;
    }

    /**
     * Set the texte o.
     *
     * @param string $texteO The texte o.
     */
    public function setTexteO($texteO) {
        $this->texteO = $texteO;
        return $this;
    }
}
