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
 * Sel av lst perso acces gestionnaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSelAvLstPersoAccesGestionnaireTrait {

    /**
     * Sel av lst perso acces gestionnaire.
     *
     * @var bool
     */
    private $selAvLstPersoAccesGestionnaire;

    /**
     * Get the sel av lst perso acces gestionnaire.
     *
     * @return bool Returns the sel av lst perso acces gestionnaire.
     */
    public function getSelAvLstPersoAccesGestionnaire() {
        return $this->selAvLstPersoAccesGestionnaire;
    }

    /**
     * Set the sel av lst perso acces gestionnaire.
     *
     * @param bool $selAvLstPersoAccesGestionnaire The sel av lst perso acces gestionnaire.
     */
    public function setSelAvLstPersoAccesGestionnaire($selAvLstPersoAccesGestionnaire) {
        $this->selAvLstPersoAccesGestionnaire = $selAvLstPersoAccesGestionnaire;
        return $this;
    }
}
