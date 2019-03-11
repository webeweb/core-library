<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Liaisons destinataires types envois model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsDestinatairesTypesEnvois {

    /**
     * Code destinataire.
     *
     * @var string
     */
    private $codeDestinataire;

    /**
     * Code type envoi.
     *
     * @var string
     */
    private $codeTypeEnvoi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code destinataire.
     *
     * @return string Returns the code destinataire.
     */
    public function getCodeDestinataire() {
        return $this->codeDestinataire;
    }

    /**
     * Get the code type envoi.
     *
     * @return string Returns the code type envoi.
     */
    public function getCodeTypeEnvoi() {
        return $this->codeTypeEnvoi;
    }

    /**
     * Set the code destinataire.
     *
     * @param string $codeDestinataire The code destinataire.
     * @return LiaisonsDestinatairesTypesEnvois Returns this liaisons destinataires types envois.
     */
    public function setCodeDestinataire($codeDestinataire) {
        $this->codeDestinataire = $codeDestinataire;
        return $this;
    }

    /**
     * Set the code type envoi.
     *
     * @param string $codeTypeEnvoi The code type envoi.
     * @return LiaisonsDestinatairesTypesEnvois Returns this liaisons destinataires types envois.
     */
    public function setCodeTypeEnvoi($codeTypeEnvoi) {
        $this->codeTypeEnvoi = $codeTypeEnvoi;
        return $this;
    }
}
