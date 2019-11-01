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
 * Trs type facturation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsTypeFacturationTrait {

    /**
     * Trs type facturation.
     *
     * @var string
     */
    private $trsTypeFacturation;

    /**
     * Get the trs type facturation.
     *
     * @return string Returns the trs type facturation.
     */
    public function getTrsTypeFacturation() {
        return $this->trsTypeFacturation;
    }

    /**
     * Set the trs type facturation.
     *
     * @param string $trsTypeFacturation The trs type facturation.
     */
    public function setTrsTypeFacturation($trsTypeFacturation) {
        $this->trsTypeFacturation = $trsTypeFacturation;
        return $this;
    }
}
