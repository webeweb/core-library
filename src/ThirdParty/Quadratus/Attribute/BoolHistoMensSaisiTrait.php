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
 * Histo mens saisi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHistoMensSaisiTrait {

    /**
     * Histo mens saisi.
     *
     * @var bool
     */
    private $histoMensSaisi;

    /**
     * Get the histo mens saisi.
     *
     * @return bool Returns the histo mens saisi.
     */
    public function getHistoMensSaisi() {
        return $this->histoMensSaisi;
    }

    /**
     * Set the histo mens saisi.
     *
     * @param bool $histoMensSaisi The histo mens saisi.
     */
    public function setHistoMensSaisi($histoMensSaisi) {
        $this->histoMensSaisi = $histoMensSaisi;
        return $this;
    }
}
