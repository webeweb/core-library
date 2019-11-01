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
 * Tva envoyer mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaEnvoyerMailTrait {

    /**
     * Tva envoyer mail.
     *
     * @var bool
     */
    private $tvaEnvoyerMail;

    /**
     * Get the tva envoyer mail.
     *
     * @return bool Returns the tva envoyer mail.
     */
    public function getTvaEnvoyerMail() {
        return $this->tvaEnvoyerMail;
    }

    /**
     * Set the tva envoyer mail.
     *
     * @param bool $tvaEnvoyerMail The tva envoyer mail.
     */
    public function setTvaEnvoyerMail($tvaEnvoyerMail) {
        $this->tvaEnvoyerMail = $tvaEnvoyerMail;
        return $this;
    }
}
