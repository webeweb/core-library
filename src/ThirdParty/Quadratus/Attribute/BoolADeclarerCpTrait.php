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
 * A declarer cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolADeclarerCpTrait {

    /**
     * A declarer cp.
     *
     * @var bool
     */
    private $aDeclarerCp;

    /**
     * Get the a declarer cp.
     *
     * @return bool Returns the a declarer cp.
     */
    public function getADeclarerCp() {
        return $this->aDeclarerCp;
    }

    /**
     * Set the a declarer cp.
     *
     * @param bool $aDeclarerCp The a declarer cp.
     */
    public function setADeclarerCp($aDeclarerCp) {
        $this->aDeclarerCp = $aDeclarerCp;
        return $this;
    }
}
