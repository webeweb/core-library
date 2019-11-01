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
 * Transaction en cours trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransactionEnCoursTrait {

    /**
     * Transaction en cours.
     *
     * @var bool
     */
    private $transactionEnCours;

    /**
     * Get the transaction en cours.
     *
     * @return bool Returns the transaction en cours.
     */
    public function getTransactionEnCours() {
        return $this->transactionEnCours;
    }

    /**
     * Set the transaction en cours.
     *
     * @param bool $transactionEnCours The transaction en cours.
     */
    public function setTransactionEnCours($transactionEnCours) {
        $this->transactionEnCours = $transactionEnCours;
        return $this;
    }
}
