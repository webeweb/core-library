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
 * Acces autorise bons travaux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesAutoriseBonsTravauxTrait {

    /**
     * Acces autorise bons travaux.
     *
     * @var bool
     */
    private $accesAutoriseBonsTravaux;

    /**
     * Get the acces autorise bons travaux.
     *
     * @return bool Returns the acces autorise bons travaux.
     */
    public function getAccesAutoriseBonsTravaux() {
        return $this->accesAutoriseBonsTravaux;
    }

    /**
     * Set the acces autorise bons travaux.
     *
     * @param bool $accesAutoriseBonsTravaux The acces autorise bons travaux.
     */
    public function setAccesAutoriseBonsTravaux($accesAutoriseBonsTravaux) {
        $this->accesAutoriseBonsTravaux = $accesAutoriseBonsTravaux;
        return $this;
    }
}
