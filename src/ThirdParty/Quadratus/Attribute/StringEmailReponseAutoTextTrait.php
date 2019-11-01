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
 * Email reponse auto text trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmailReponseAutoTextTrait {

    /**
     * Email reponse auto text.
     *
     * @var string
     */
    private $emailReponseAutoText;

    /**
     * Get the email reponse auto text.
     *
     * @return string Returns the email reponse auto text.
     */
    public function getEmailReponseAutoText() {
        return $this->emailReponseAutoText;
    }

    /**
     * Set the email reponse auto text.
     *
     * @param string $emailReponseAutoText The email reponse auto text.
     */
    public function setEmailReponseAutoText($emailReponseAutoText) {
        $this->emailReponseAutoText = $emailReponseAutoText;
        return $this;
    }
}
