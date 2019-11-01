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
 * Tp interdit creat millesime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpInterditCreatMillesimeTrait {

    /**
     * Tp interdit creat millesime.
     *
     * @var bool
     */
    private $tpInterditCreatMillesime;

    /**
     * Get the tp interdit creat millesime.
     *
     * @return bool Returns the tp interdit creat millesime.
     */
    public function getTpInterditCreatMillesime() {
        return $this->tpInterditCreatMillesime;
    }

    /**
     * Set the tp interdit creat millesime.
     *
     * @param bool $tpInterditCreatMillesime The tp interdit creat millesime.
     */
    public function setTpInterditCreatMillesime($tpInterditCreatMillesime) {
        $this->tpInterditCreatMillesime = $tpInterditCreatMillesime;
        return $this;
    }
}
