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
 * Code site tenue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeSiteTenueTrait {

    /**
     * Code site tenue.
     *
     * @var string
     */
    private $codeSiteTenue;

    /**
     * Get the code site tenue.
     *
     * @return string Returns the code site tenue.
     */
    public function getCodeSiteTenue() {
        return $this->codeSiteTenue;
    }

    /**
     * Set the code site tenue.
     *
     * @param string $codeSiteTenue The code site tenue.
     */
    public function setCodeSiteTenue($codeSiteTenue) {
        $this->codeSiteTenue = $codeSiteTenue;
        return $this;
    }
}
