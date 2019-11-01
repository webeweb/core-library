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
 * Tva vire crlf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaVireCrlfTrait {

    /**
     * Tva vire crlf.
     *
     * @var bool
     */
    private $tvaVireCrlf;

    /**
     * Get the tva vire crlf.
     *
     * @return bool Returns the tva vire crlf.
     */
    public function getTvaVireCrlf() {
        return $this->tvaVireCrlf;
    }

    /**
     * Set the tva vire crlf.
     *
     * @param bool $tvaVireCrlf The tva vire crlf.
     */
    public function setTvaVireCrlf($tvaVireCrlf) {
        $this->tvaVireCrlf = $tvaVireCrlf;
        return $this;
    }
}
