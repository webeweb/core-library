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
 * Niv tri bureau trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivTriBureauTrait {

    /**
     * Niv tri bureau.
     *
     * @var string
     */
    private $nivTriBureau;

    /**
     * Get the niv tri bureau.
     *
     * @return string Returns the niv tri bureau.
     */
    public function getNivTriBureau() {
        return $this->nivTriBureau;
    }

    /**
     * Set the niv tri bureau.
     *
     * @param string $nivTriBureau The niv tri bureau.
     */
    public function setNivTriBureau($nivTriBureau) {
        $this->nivTriBureau = $nivTriBureau;
        return $this;
    }
}
