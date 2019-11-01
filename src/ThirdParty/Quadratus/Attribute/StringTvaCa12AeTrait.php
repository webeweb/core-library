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
 * Tva ca12 ae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCa12AeTrait {

    /**
     * Tva ca12 ae.
     *
     * @var string
     */
    private $tvaCa12Ae;

    /**
     * Get the tva ca12 ae.
     *
     * @return string Returns the tva ca12 ae.
     */
    public function getTvaCa12Ae() {
        return $this->tvaCa12Ae;
    }

    /**
     * Set the tva ca12 ae.
     *
     * @param string $tvaCa12Ae The tva ca12 ae.
     */
    public function setTvaCa12Ae($tvaCa12Ae) {
        $this->tvaCa12Ae = $tvaCa12Ae;
        return $this;
    }
}
