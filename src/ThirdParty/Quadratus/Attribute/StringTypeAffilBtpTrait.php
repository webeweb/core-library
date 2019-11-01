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
 * Type affil btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAffilBtpTrait {

    /**
     * Type affil btp.
     *
     * @var string
     */
    private $typeAffilBtp;

    /**
     * Get the type affil btp.
     *
     * @return string Returns the type affil btp.
     */
    public function getTypeAffilBtp() {
        return $this->typeAffilBtp;
    }

    /**
     * Set the type affil btp.
     *
     * @param string $typeAffilBtp The type affil btp.
     */
    public function setTypeAffilBtp($typeAffilBtp) {
        $this->typeAffilBtp = $typeAffilBtp;
        return $this;
    }
}
