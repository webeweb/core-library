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
 * Traiter edi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTraiterEdiTrait {

    /**
     * Traiter edi.
     *
     * @var bool
     */
    private $traiterEdi;

    /**
     * Get the traiter edi.
     *
     * @return bool Returns the traiter edi.
     */
    public function getTraiterEdi() {
        return $this->traiterEdi;
    }

    /**
     * Set the traiter edi.
     *
     * @param bool $traiterEdi The traiter edi.
     */
    public function setTraiterEdi($traiterEdi) {
        $this->traiterEdi = $traiterEdi;
        return $this;
    }
}
