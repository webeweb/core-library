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
 * Numero abattement contrat msa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroAbattementContratMsaTrait {

    /**
     * Numero abattement contrat msa.
     *
     * @var int
     */
    private $numeroAbattementContratMsa;

    /**
     * Get the numero abattement contrat msa.
     *
     * @return int Returns the numero abattement contrat msa.
     */
    public function getNumeroAbattementContratMsa() {
        return $this->numeroAbattementContratMsa;
    }

    /**
     * Set the numero abattement contrat msa.
     *
     * @param int $numeroAbattementContratMsa The numero abattement contrat msa.
     */
    public function setNumeroAbattementContratMsa($numeroAbattementContratMsa) {
        $this->numeroAbattementContratMsa = $numeroAbattementContratMsa;
        return $this;
    }
}
