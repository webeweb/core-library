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
 * Tva e4 ri trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaE4RiTrait {

    /**
     * Tva e4 ri.
     *
     * @var string
     */
    private $tvaE4Ri;

    /**
     * Get the tva e4 ri.
     *
     * @return string Returns the tva e4 ri.
     */
    public function getTvaE4Ri() {
        return $this->tvaE4Ri;
    }

    /**
     * Set the tva e4 ri.
     *
     * @param string $tvaE4Ri The tva e4 ri.
     */
    public function setTvaE4Ri($tvaE4Ri) {
        $this->tvaE4Ri = $tvaE4Ri;
        return $this;
    }
}
