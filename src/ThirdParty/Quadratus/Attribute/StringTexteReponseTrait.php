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
 * Texte reponse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTexteReponseTrait {

    /**
     * Texte reponse.
     *
     * @var string
     */
    private $texteReponse;

    /**
     * Get the texte reponse.
     *
     * @return string Returns the texte reponse.
     */
    public function getTexteReponse() {
        return $this->texteReponse;
    }

    /**
     * Set the texte reponse.
     *
     * @param string $texteReponse The texte reponse.
     */
    public function setTexteReponse($texteReponse) {
        $this->texteReponse = $texteReponse;
        return $this;
    }
}
