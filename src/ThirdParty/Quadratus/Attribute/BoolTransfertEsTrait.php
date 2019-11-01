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
 * Transfert es trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransfertEsTrait {

    /**
     * Transfert es.
     *
     * @var bool
     */
    private $transfertEs;

    /**
     * Get the transfert es.
     *
     * @return bool Returns the transfert es.
     */
    public function getTransfertEs() {
        return $this->transfertEs;
    }

    /**
     * Set the transfert es.
     *
     * @param bool $transfertEs The transfert es.
     */
    public function setTransfertEs($transfertEs) {
        $this->transfertEs = $transfertEs;
        return $this;
    }
}
