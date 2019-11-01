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
 * Acces autorise plan tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesAutorisePlanTacheTrait {

    /**
     * Acces autorise plan tache.
     *
     * @var bool
     */
    private $accesAutorisePlanTache;

    /**
     * Get the acces autorise plan tache.
     *
     * @return bool Returns the acces autorise plan tache.
     */
    public function getAccesAutorisePlanTache() {
        return $this->accesAutorisePlanTache;
    }

    /**
     * Set the acces autorise plan tache.
     *
     * @param bool $accesAutorisePlanTache The acces autorise plan tache.
     */
    public function setAccesAutorisePlanTache($accesAutorisePlanTache) {
        $this->accesAutorisePlanTache = $accesAutorisePlanTache;
        return $this;
    }
}
