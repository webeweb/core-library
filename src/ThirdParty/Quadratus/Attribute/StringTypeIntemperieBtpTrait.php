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
 * Type intemperie btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeIntemperieBtpTrait {

    /**
     * Type intemperie btp.
     *
     * @var string
     */
    private $typeIntemperieBtp;

    /**
     * Get the type intemperie btp.
     *
     * @return string Returns the type intemperie btp.
     */
    public function getTypeIntemperieBtp() {
        return $this->typeIntemperieBtp;
    }

    /**
     * Set the type intemperie btp.
     *
     * @param string $typeIntemperieBtp The type intemperie btp.
     */
    public function setTypeIntemperieBtp($typeIntemperieBtp) {
        $this->typeIntemperieBtp = $typeIntemperieBtp;
        return $this;
    }
}
