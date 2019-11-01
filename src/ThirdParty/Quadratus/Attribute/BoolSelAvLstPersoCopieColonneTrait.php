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
 * Sel av lst perso copie colonne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSelAvLstPersoCopieColonneTrait {

    /**
     * Sel av lst perso copie colonne.
     *
     * @var bool
     */
    private $selAvLstPersoCopieColonne;

    /**
     * Get the sel av lst perso copie colonne.
     *
     * @return bool Returns the sel av lst perso copie colonne.
     */
    public function getSelAvLstPersoCopieColonne() {
        return $this->selAvLstPersoCopieColonne;
    }

    /**
     * Set the sel av lst perso copie colonne.
     *
     * @param bool $selAvLstPersoCopieColonne The sel av lst perso copie colonne.
     */
    public function setSelAvLstPersoCopieColonne($selAvLstPersoCopieColonne) {
        $this->selAvLstPersoCopieColonne = $selAvLstPersoCopieColonne;
        return $this;
    }
}
