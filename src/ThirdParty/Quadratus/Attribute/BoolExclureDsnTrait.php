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
 * Exclure dsn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureDsnTrait {

    /**
     * Exclure dsn.
     *
     * @var bool
     */
    private $exclureDsn;

    /**
     * Get the exclure dsn.
     *
     * @return bool Returns the exclure dsn.
     */
    public function getExclureDsn() {
        return $this->exclureDsn;
    }

    /**
     * Set the exclure dsn.
     *
     * @param bool $exclureDsn The exclure dsn.
     */
    public function setExclureDsn($exclureDsn) {
        $this->exclureDsn = $exclureDsn;
        return $this;
    }
}
