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
 * Code statut categ retraite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeStatutCategRetraiteTrait {

    /**
     * Code statut categ retraite.
     *
     * @var string
     */
    private $codeStatutCategRetraite;

    /**
     * Get the code statut categ retraite.
     *
     * @return string Returns the code statut categ retraite.
     */
    public function getCodeStatutCategRetraite() {
        return $this->codeStatutCategRetraite;
    }

    /**
     * Set the code statut categ retraite.
     *
     * @param string $codeStatutCategRetraite The code statut categ retraite.
     */
    public function setCodeStatutCategRetraite($codeStatutCategRetraite) {
        $this->codeStatutCategRetraite = $codeStatutCategRetraite;
        return $this;
    }
}
