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
 * Tva e4 r jrn od trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaE4RJrnOdTrait {

    /**
     * Tva e4 r jrn od.
     *
     * @var string
     */
    private $tvaE4RJrnOd;

    /**
     * Get the tva e4 r jrn od.
     *
     * @return string Returns the tva e4 r jrn od.
     */
    public function getTvaE4RJrnOd() {
        return $this->tvaE4RJrnOd;
    }

    /**
     * Set the tva e4 r jrn od.
     *
     * @param string $tvaE4RJrnOd The tva e4 r jrn od.
     */
    public function setTvaE4RJrnOd($tvaE4RJrnOd) {
        $this->tvaE4RJrnOd = $tvaE4RJrnOd;
        return $this;
    }
}
