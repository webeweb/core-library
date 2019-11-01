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
 * Remun part fillon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemunPartFillonTrait {

    /**
     * Remun part fillon.
     *
     * @var bool
     */
    private $remunPartFillon;

    /**
     * Get the remun part fillon.
     *
     * @return bool Returns the remun part fillon.
     */
    public function getRemunPartFillon() {
        return $this->remunPartFillon;
    }

    /**
     * Set the remun part fillon.
     *
     * @param bool $remunPartFillon The remun part fillon.
     */
    public function setRemunPartFillon($remunPartFillon) {
        $this->remunPartFillon = $remunPartFillon;
        return $this;
    }
}
