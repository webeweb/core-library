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
 * Texte e trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteETrait {

    /**
     * Texte e.
     *
     * @var string
     */
    private $texteE;

    /**
     * Get the texte e.
     *
     * @return string Returns the texte e.
     */
    public function getTexteE() {
        return $this->texteE;
    }

    /**
     * Set the texte e.
     *
     * @param string $texteE The texte e.
     */
    public function setTexteE($texteE) {
        $this->texteE = $texteE;
        return $this;
    }
}
