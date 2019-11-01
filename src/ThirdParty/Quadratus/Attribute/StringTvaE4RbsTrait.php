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
 * Tva e4 rbs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaE4RbsTrait {

    /**
     * Tva e4 rbs.
     *
     * @var string
     */
    private $tvaE4Rbs;

    /**
     * Get the tva e4 rbs.
     *
     * @return string Returns the tva e4 rbs.
     */
    public function getTvaE4Rbs() {
        return $this->tvaE4Rbs;
    }

    /**
     * Set the tva e4 rbs.
     *
     * @param string $tvaE4Rbs The tva e4 rbs.
     */
    public function setTvaE4Rbs($tvaE4Rbs) {
        $this->tvaE4Rbs = $tvaE4Rbs;
        return $this;
    }
}
