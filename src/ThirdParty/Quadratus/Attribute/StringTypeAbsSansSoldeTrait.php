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
 * Type abs sans solde trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAbsSansSoldeTrait {

    /**
     * Type abs sans solde.
     *
     * @var string
     */
    private $typeAbsSansSolde;

    /**
     * Get the type abs sans solde.
     *
     * @return string Returns the type abs sans solde.
     */
    public function getTypeAbsSansSolde() {
        return $this->typeAbsSansSolde;
    }

    /**
     * Set the type abs sans solde.
     *
     * @param string $typeAbsSansSolde The type abs sans solde.
     */
    public function setTypeAbsSansSolde($typeAbsSansSolde) {
        $this->typeAbsSansSolde = $typeAbsSansSolde;
        return $this;
    }
}
