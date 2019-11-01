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
 * Sel av lst perso interdire creat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSelAvLstPersoInterdireCreatTrait {

    /**
     * Sel av lst perso interdire creat.
     *
     * @var bool
     */
    private $selAvLstPersoInterdireCreat;

    /**
     * Get the sel av lst perso interdire creat.
     *
     * @return bool Returns the sel av lst perso interdire creat.
     */
    public function getSelAvLstPersoInterdireCreat() {
        return $this->selAvLstPersoInterdireCreat;
    }

    /**
     * Set the sel av lst perso interdire creat.
     *
     * @param bool $selAvLstPersoInterdireCreat The sel av lst perso interdire creat.
     */
    public function setSelAvLstPersoInterdireCreat($selAvLstPersoInterdireCreat) {
        $this->selAvLstPersoInterdireCreat = $selAvLstPersoInterdireCreat;
        return $this;
    }
}
