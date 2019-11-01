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
 * Code etat contrat prud trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEtatContratPrudTrait {

    /**
     * Code etat contrat prud.
     *
     * @var string
     */
    private $codeEtatContratPrud;

    /**
     * Get the code etat contrat prud.
     *
     * @return string Returns the code etat contrat prud.
     */
    public function getCodeEtatContratPrud() {
        return $this->codeEtatContratPrud;
    }

    /**
     * Set the code etat contrat prud.
     *
     * @param string $codeEtatContratPrud The code etat contrat prud.
     */
    public function setCodeEtatContratPrud($codeEtatContratPrud) {
        $this->codeEtatContratPrud = $codeEtatContratPrud;
        return $this;
    }
}
