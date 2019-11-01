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
 * Tva e4 bi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaE4BiTrait {

    /**
     * Tva e4 bi.
     *
     * @var string
     */
    private $tvaE4Bi;

    /**
     * Get the tva e4 bi.
     *
     * @return string Returns the tva e4 bi.
     */
    public function getTvaE4Bi() {
        return $this->tvaE4Bi;
    }

    /**
     * Set the tva e4 bi.
     *
     * @param string $tvaE4Bi The tva e4 bi.
     */
    public function setTvaE4Bi($tvaE4Bi) {
        $this->tvaE4Bi = $tvaE4Bi;
        return $this;
    }
}
