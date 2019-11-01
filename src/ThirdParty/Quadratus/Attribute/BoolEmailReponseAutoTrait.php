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
 * Email reponse auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEmailReponseAutoTrait {

    /**
     * Email reponse auto.
     *
     * @var bool
     */
    private $emailReponseAuto;

    /**
     * Get the email reponse auto.
     *
     * @return bool Returns the email reponse auto.
     */
    public function getEmailReponseAuto() {
        return $this->emailReponseAuto;
    }

    /**
     * Set the email reponse auto.
     *
     * @param bool $emailReponseAuto The email reponse auto.
     */
    public function setEmailReponseAuto($emailReponseAuto) {
        $this->emailReponseAuto = $emailReponseAuto;
        return $this;
    }
}
