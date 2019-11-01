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
 * Etat ctrl norme prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatCtrlNormePrevTrait {

    /**
     * Etat ctrl norme prev.
     *
     * @var string
     */
    private $etatCtrlNormePrev;

    /**
     * Get the etat ctrl norme prev.
     *
     * @return string Returns the etat ctrl norme prev.
     */
    public function getEtatCtrlNormePrev() {
        return $this->etatCtrlNormePrev;
    }

    /**
     * Set the etat ctrl norme prev.
     *
     * @param string $etatCtrlNormePrev The etat ctrl norme prev.
     */
    public function setEtatCtrlNormePrev($etatCtrlNormePrev) {
        $this->etatCtrlNormePrev = $etatCtrlNormePrev;
        return $this;
    }
}
