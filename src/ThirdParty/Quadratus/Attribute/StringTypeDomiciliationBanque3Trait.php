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
 * Type domiciliation banque3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDomiciliationBanque3Trait {

    /**
     * Type domiciliation banque3.
     *
     * @var string
     */
    private $typeDomiciliationBanque3;

    /**
     * Get the type domiciliation banque3.
     *
     * @return string Returns the type domiciliation banque3.
     */
    public function getTypeDomiciliationBanque3() {
        return $this->typeDomiciliationBanque3;
    }

    /**
     * Set the type domiciliation banque3.
     *
     * @param string $typeDomiciliationBanque3 The type domiciliation banque3.
     */
    public function setTypeDomiciliationBanque3($typeDomiciliationBanque3) {
        $this->typeDomiciliationBanque3 = $typeDomiciliationBanque3;
        return $this;
    }
}
