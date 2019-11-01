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
 * N evenement dsn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNEvenementDsnTrait {

    /**
     * N evenement dsn.
     *
     * @var int
     */
    private $nEvenementDsn;

    /**
     * Get the n evenement dsn.
     *
     * @return int Returns the n evenement dsn.
     */
    public function getNEvenementDsn() {
        return $this->nEvenementDsn;
    }

    /**
     * Set the n evenement dsn.
     *
     * @param int $nEvenementDsn The n evenement dsn.
     */
    public function setNEvenementDsn($nEvenementDsn) {
        $this->nEvenementDsn = $nEvenementDsn;
        return $this;
    }
}
