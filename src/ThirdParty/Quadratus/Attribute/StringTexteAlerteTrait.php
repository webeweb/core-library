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
 * Texte alerte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteAlerteTrait {

    /**
     * Texte alerte.
     *
     * @var string
     */
    private $texteAlerte;

    /**
     * Get the texte alerte.
     *
     * @return string Returns the texte alerte.
     */
    public function getTexteAlerte() {
        return $this->texteAlerte;
    }

    /**
     * Set the texte alerte.
     *
     * @param string $texteAlerte The texte alerte.
     */
    public function setTexteAlerte($texteAlerte) {
        $this->texteAlerte = $texteAlerte;
        return $this;
    }
}
