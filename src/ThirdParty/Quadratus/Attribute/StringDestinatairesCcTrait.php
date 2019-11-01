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
 * Destinataires cc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDestinatairesCcTrait {

    /**
     * Destinataires cc.
     *
     * @var string
     */
    private $destinatairesCc;

    /**
     * Get the destinataires cc.
     *
     * @return string Returns the destinataires cc.
     */
    public function getDestinatairesCc() {
        return $this->destinatairesCc;
    }

    /**
     * Set the destinataires cc.
     *
     * @param string $destinatairesCc The destinataires cc.
     */
    public function setDestinatairesCc($destinatairesCc) {
        $this->destinatairesCc = $destinatairesCc;
        return $this;
    }
}
