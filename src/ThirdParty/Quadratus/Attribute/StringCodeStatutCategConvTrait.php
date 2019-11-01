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
 * Code statut categ conv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeStatutCategConvTrait {

    /**
     * Code statut categ conv.
     *
     * @var string
     */
    private $codeStatutCategConv;

    /**
     * Get the code statut categ conv.
     *
     * @return string Returns the code statut categ conv.
     */
    public function getCodeStatutCategConv() {
        return $this->codeStatutCategConv;
    }

    /**
     * Set the code statut categ conv.
     *
     * @param string $codeStatutCategConv The code statut categ conv.
     */
    public function setCodeStatutCategConv($codeStatutCategConv) {
        $this->codeStatutCategConv = $codeStatutCategConv;
        return $this;
    }
}
