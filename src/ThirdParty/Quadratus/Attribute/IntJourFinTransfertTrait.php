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
 * Jour fin transfert trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntJourFinTransfertTrait {

    /**
     * Jour fin transfert.
     *
     * @var int
     */
    private $jourFinTransfert;

    /**
     * Get the jour fin transfert.
     *
     * @return int Returns the jour fin transfert.
     */
    public function getJourFinTransfert() {
        return $this->jourFinTransfert;
    }

    /**
     * Set the jour fin transfert.
     *
     * @param int $jourFinTransfert The jour fin transfert.
     */
    public function setJourFinTransfert($jourFinTransfert) {
        $this->jourFinTransfert = $jourFinTransfert;
        return $this;
    }
}
