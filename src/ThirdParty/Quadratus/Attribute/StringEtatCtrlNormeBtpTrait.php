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
 * Etat ctrl norme btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatCtrlNormeBtpTrait {

    /**
     * Etat ctrl norme btp.
     *
     * @var string
     */
    private $etatCtrlNormeBtp;

    /**
     * Get the etat ctrl norme btp.
     *
     * @return string Returns the etat ctrl norme btp.
     */
    public function getEtatCtrlNormeBtp() {
        return $this->etatCtrlNormeBtp;
    }

    /**
     * Set the etat ctrl norme btp.
     *
     * @param string $etatCtrlNormeBtp The etat ctrl norme btp.
     */
    public function setEtatCtrlNormeBtp($etatCtrlNormeBtp) {
        $this->etatCtrlNormeBtp = $etatCtrlNormeBtp;
        return $this;
    }
}
