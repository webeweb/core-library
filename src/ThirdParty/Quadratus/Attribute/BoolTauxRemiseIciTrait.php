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
 * Taux remise ici trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTauxRemiseIciTrait {

    /**
     * Taux remise ici.
     *
     * @var bool
     */
    private $tauxRemiseIci;

    /**
     * Get the taux remise ici.
     *
     * @return bool Returns the taux remise ici.
     */
    public function getTauxRemiseIci() {
        return $this->tauxRemiseIci;
    }

    /**
     * Set the taux remise ici.
     *
     * @param bool $tauxRemiseIci The taux remise ici.
     */
    public function setTauxRemiseIci($tauxRemiseIci) {
        $this->tauxRemiseIci = $tauxRemiseIci;
        return $this;
    }
}
