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
 * Texte contenu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteContenuTrait {

    /**
     * Texte contenu.
     *
     * @var string
     */
    private $texteContenu;

    /**
     * Get the texte contenu.
     *
     * @return string Returns the texte contenu.
     */
    public function getTexteContenu() {
        return $this->texteContenu;
    }

    /**
     * Set the texte contenu.
     *
     * @param string $texteContenu The texte contenu.
     */
    public function setTexteContenu($texteContenu) {
        $this->texteContenu = $texteContenu;
        return $this;
    }
}
