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
 * A declarer dsn neant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolADeclarerDsnNeantTrait {

    /**
     * A declarer dsn neant.
     *
     * @var bool
     */
    private $aDeclarerDsnNeant;

    /**
     * Get the a declarer dsn neant.
     *
     * @return bool Returns the a declarer dsn neant.
     */
    public function getADeclarerDsnNeant() {
        return $this->aDeclarerDsnNeant;
    }

    /**
     * Set the a declarer dsn neant.
     *
     * @param bool $aDeclarerDsnNeant The a declarer dsn neant.
     */
    public function setADeclarerDsnNeant($aDeclarerDsnNeant) {
        $this->aDeclarerDsnNeant = $aDeclarerDsnNeant;
        return $this;
    }
}
