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
 * Code mission frais fixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMissionFraisFixeTrait {

    /**
     * Code mission frais fixe.
     *
     * @var string
     */
    private $codeMissionFraisFixe;

    /**
     * Get the code mission frais fixe.
     *
     * @return string Returns the code mission frais fixe.
     */
    public function getCodeMissionFraisFixe() {
        return $this->codeMissionFraisFixe;
    }

    /**
     * Set the code mission frais fixe.
     *
     * @param string $codeMissionFraisFixe The code mission frais fixe.
     */
    public function setCodeMissionFraisFixe($codeMissionFraisFixe) {
        $this->codeMissionFraisFixe = $codeMissionFraisFixe;
        return $this;
    }
}
