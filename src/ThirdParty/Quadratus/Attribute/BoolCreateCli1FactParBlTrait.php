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
 * Create cli1 fact par bl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreateCli1FactParBlTrait {

    /**
     * Create cli1 fact par bl.
     *
     * @var bool
     */
    private $createCli1FactParBl;

    /**
     * Get the create cli1 fact par bl.
     *
     * @return bool Returns the create cli1 fact par bl.
     */
    public function getCreateCli1FactParBl() {
        return $this->createCli1FactParBl;
    }

    /**
     * Set the create cli1 fact par bl.
     *
     * @param bool $createCli1FactParBl The create cli1 fact par bl.
     */
    public function setCreateCli1FactParBl($createCli1FactParBl) {
        $this->createCli1FactParBl = $createCli1FactParBl;
        return $this;
    }
}
