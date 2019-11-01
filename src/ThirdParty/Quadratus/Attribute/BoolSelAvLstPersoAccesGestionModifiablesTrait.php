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
 * Sel av lst perso acces gestion modifiables trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSelAvLstPersoAccesGestionModifiablesTrait {

    /**
     * Sel av lst perso acces gestion modifiables.
     *
     * @var bool
     */
    private $selAvLstPersoAccesGestionModifiables;

    /**
     * Get the sel av lst perso acces gestion modifiables.
     *
     * @return bool Returns the sel av lst perso acces gestion modifiables.
     */
    public function getSelAvLstPersoAccesGestionModifiables() {
        return $this->selAvLstPersoAccesGestionModifiables;
    }

    /**
     * Set the sel av lst perso acces gestion modifiables.
     *
     * @param bool $selAvLstPersoAccesGestionModifiables The sel av lst perso acces gestion modifiables.
     */
    public function setSelAvLstPersoAccesGestionModifiables($selAvLstPersoAccesGestionModifiables) {
        $this->selAvLstPersoAccesGestionModifiables = $selAvLstPersoAccesGestionModifiables;
        return $this;
    }
}
