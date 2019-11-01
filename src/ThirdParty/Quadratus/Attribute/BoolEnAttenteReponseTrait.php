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
 * En attente reponse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEnAttenteReponseTrait {

    /**
     * En attente reponse.
     *
     * @var bool
     */
    private $enAttenteReponse;

    /**
     * Get the en attente reponse.
     *
     * @return bool Returns the en attente reponse.
     */
    public function getEnAttenteReponse() {
        return $this->enAttenteReponse;
    }

    /**
     * Set the en attente reponse.
     *
     * @param bool $enAttenteReponse The en attente reponse.
     */
    public function setEnAttenteReponse($enAttenteReponse) {
        $this->enAttenteReponse = $enAttenteReponse;
        return $this;
    }
}
