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
 * Email activer aide saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEmailActiverAideSaisieTrait {

    /**
     * Email activer aide saisie.
     *
     * @var bool
     */
    private $emailActiverAideSaisie;

    /**
     * Get the email activer aide saisie.
     *
     * @return bool Returns the email activer aide saisie.
     */
    public function getEmailActiverAideSaisie() {
        return $this->emailActiverAideSaisie;
    }

    /**
     * Set the email activer aide saisie.
     *
     * @param bool $emailActiverAideSaisie The email activer aide saisie.
     */
    public function setEmailActiverAideSaisie($emailActiverAideSaisie) {
        $this->emailActiverAideSaisie = $emailActiverAideSaisie;
        return $this;
    }
}
