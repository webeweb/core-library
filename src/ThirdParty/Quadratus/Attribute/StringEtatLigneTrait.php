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
 * Etat ligne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatLigneTrait {

    /**
     * Etat ligne.
     *
     * @var string
     */
    private $etatLigne;

    /**
     * Get the etat ligne.
     *
     * @return string Returns the etat ligne.
     */
    public function getEtatLigne() {
        return $this->etatLigne;
    }

    /**
     * Set the etat ligne.
     *
     * @param string $etatLigne The etat ligne.
     */
    public function setEtatLigne($etatLigne) {
        $this->etatLigne = $etatLigne;
        return $this;
    }
}
