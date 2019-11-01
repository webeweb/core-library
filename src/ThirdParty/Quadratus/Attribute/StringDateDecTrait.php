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
 * Date dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDateDecTrait {

    /**
     * Date dec.
     *
     * @var string
     */
    private $dateDec;

    /**
     * Get the date dec.
     *
     * @return string Returns the date dec.
     */
    public function getDateDec() {
        return $this->dateDec;
    }

    /**
     * Set the date dec.
     *
     * @param string $dateDec The date dec.
     */
    public function setDateDec($dateDec) {
        $this->dateDec = $dateDec;
        return $this;
    }
}
