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
 * Texte g trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteGTrait {

    /**
     * Texte g.
     *
     * @var string
     */
    private $texteG;

    /**
     * Get the texte g.
     *
     * @return string Returns the texte g.
     */
    public function getTexteG() {
        return $this->texteG;
    }

    /**
     * Set the texte g.
     *
     * @param string $texteG The texte g.
     */
    public function setTexteG($texteG) {
        $this->texteG = $texteG;
        return $this;
    }
}
