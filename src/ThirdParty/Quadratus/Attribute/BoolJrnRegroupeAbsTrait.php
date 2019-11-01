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
 * Jrn regroupe abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolJrnRegroupeAbsTrait {

    /**
     * Jrn regroupe abs.
     *
     * @var bool
     */
    private $jrnRegroupeAbs;

    /**
     * Get the jrn regroupe abs.
     *
     * @return bool Returns the jrn regroupe abs.
     */
    public function getJrnRegroupeAbs() {
        return $this->jrnRegroupeAbs;
    }

    /**
     * Set the jrn regroupe abs.
     *
     * @param bool $jrnRegroupeAbs The jrn regroupe abs.
     */
    public function setJrnRegroupeAbs($jrnRegroupeAbs) {
        $this->jrnRegroupeAbs = $jrnRegroupeAbs;
        return $this;
    }
}
