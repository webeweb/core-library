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
 * Code affil secu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAffilSecuTrait {

    /**
     * Code affil secu.
     *
     * @var string
     */
    private $codeAffilSecu;

    /**
     * Get the code affil secu.
     *
     * @return string Returns the code affil secu.
     */
    public function getCodeAffilSecu() {
        return $this->codeAffilSecu;
    }

    /**
     * Set the code affil secu.
     *
     * @param string $codeAffilSecu The code affil secu.
     */
    public function setCodeAffilSecu($codeAffilSecu) {
        $this->codeAffilSecu = $codeAffilSecu;
        return $this;
    }
}
