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
 * Cheque edite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolChequeEditeTrait {

    /**
     * Cheque edite.
     *
     * @var bool
     */
    private $chequeEdite;

    /**
     * Get the cheque edite.
     *
     * @return bool Returns the cheque edite.
     */
    public function getChequeEdite() {
        return $this->chequeEdite;
    }

    /**
     * Set the cheque edite.
     *
     * @param bool $chequeEdite The cheque edite.
     */
    public function setChequeEdite($chequeEdite) {
        $this->chequeEdite = $chequeEdite;
        return $this;
    }
}
