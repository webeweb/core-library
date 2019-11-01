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
 * Tva autres ope impos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaAutresOpeImposTrait {

    /**
     * Tva autres ope impos.
     *
     * @var bool
     */
    private $tvaAutresOpeImpos;

    /**
     * Get the tva autres ope impos.
     *
     * @return bool Returns the tva autres ope impos.
     */
    public function getTvaAutresOpeImpos() {
        return $this->tvaAutresOpeImpos;
    }

    /**
     * Set the tva autres ope impos.
     *
     * @param bool $tvaAutresOpeImpos The tva autres ope impos.
     */
    public function setTvaAutresOpeImpos($tvaAutresOpeImpos) {
        $this->tvaAutresOpeImpos = $tvaAutresOpeImpos;
        return $this;
    }
}
