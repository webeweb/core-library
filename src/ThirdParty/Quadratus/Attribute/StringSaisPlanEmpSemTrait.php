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
 * Sais plan emp sem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSaisPlanEmpSemTrait {

    /**
     * Sais plan emp sem.
     *
     * @var string
     */
    private $saisPlanEmpSem;

    /**
     * Get the sais plan emp sem.
     *
     * @return string Returns the sais plan emp sem.
     */
    public function getSaisPlanEmpSem() {
        return $this->saisPlanEmpSem;
    }

    /**
     * Set the sais plan emp sem.
     *
     * @param string $saisPlanEmpSem The sais plan emp sem.
     */
    public function setSaisPlanEmpSem($saisPlanEmpSem) {
        $this->saisPlanEmpSem = $saisPlanEmpSem;
        return $this;
    }
}
