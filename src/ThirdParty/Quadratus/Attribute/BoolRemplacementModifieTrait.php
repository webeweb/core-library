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
 * Remplacement modifie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemplacementModifieTrait {

    /**
     * Remplacement modifie.
     *
     * @var bool
     */
    private $remplacementModifie;

    /**
     * Get the remplacement modifie.
     *
     * @return bool Returns the remplacement modifie.
     */
    public function getRemplacementModifie() {
        return $this->remplacementModifie;
    }

    /**
     * Set the remplacement modifie.
     *
     * @param bool $remplacementModifie The remplacement modifie.
     */
    public function setRemplacementModifie($remplacementModifie) {
        $this->remplacementModifie = $remplacementModifie;
        return $this;
    }
}
