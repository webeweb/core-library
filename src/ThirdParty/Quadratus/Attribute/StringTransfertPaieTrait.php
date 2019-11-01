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
 * Transfert paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTransfertPaieTrait {

    /**
     * Transfert paie.
     *
     * @var string
     */
    private $transfertPaie;

    /**
     * Get the transfert paie.
     *
     * @return string Returns the transfert paie.
     */
    public function getTransfertPaie() {
        return $this->transfertPaie;
    }

    /**
     * Set the transfert paie.
     *
     * @param string $transfertPaie The transfert paie.
     */
    public function setTransfertPaie($transfertPaie) {
        $this->transfertPaie = $transfertPaie;
        return $this;
    }
}
