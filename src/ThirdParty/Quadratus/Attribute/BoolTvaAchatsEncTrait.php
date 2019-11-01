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
 * Tva achats enc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaAchatsEncTrait {

    /**
     * Tva achats enc.
     *
     * @var bool
     */
    private $tvaAchatsEnc;

    /**
     * Get the tva achats enc.
     *
     * @return bool Returns the tva achats enc.
     */
    public function getTvaAchatsEnc() {
        return $this->tvaAchatsEnc;
    }

    /**
     * Set the tva achats enc.
     *
     * @param bool $tvaAchatsEnc The tva achats enc.
     */
    public function setTvaAchatsEnc($tvaAchatsEnc) {
        $this->tvaAchatsEnc = $tvaAchatsEnc;
        return $this;
    }
}
