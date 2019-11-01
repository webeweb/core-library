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
 * A declarer dsn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolADeclarerDsnTrait {

    /**
     * A declarer dsn.
     *
     * @var bool
     */
    private $aDeclarerDsn;

    /**
     * Get the a declarer dsn.
     *
     * @return bool Returns the a declarer dsn.
     */
    public function getADeclarerDsn() {
        return $this->aDeclarerDsn;
    }

    /**
     * Set the a declarer dsn.
     *
     * @param bool $aDeclarerDsn The a declarer dsn.
     */
    public function setADeclarerDsn($aDeclarerDsn) {
        $this->aDeclarerDsn = $aDeclarerDsn;
        return $this;
    }
}
