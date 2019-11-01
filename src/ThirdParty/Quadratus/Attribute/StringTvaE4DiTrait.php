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
 * Tva e4 di trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaE4DiTrait {

    /**
     * Tva e4 di.
     *
     * @var string
     */
    private $tvaE4Di;

    /**
     * Get the tva e4 di.
     *
     * @return string Returns the tva e4 di.
     */
    public function getTvaE4Di() {
        return $this->tvaE4Di;
    }

    /**
     * Set the tva e4 di.
     *
     * @param string $tvaE4Di The tva e4 di.
     */
    public function setTvaE4Di($tvaE4Di) {
        $this->tvaE4Di = $tvaE4Di;
        return $this;
    }
}
