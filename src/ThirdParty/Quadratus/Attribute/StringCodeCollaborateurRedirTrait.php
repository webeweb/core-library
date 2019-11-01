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
 * Code collaborateur redir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollaborateurRedirTrait {

    /**
     * Code collaborateur redir.
     *
     * @var string
     */
    private $codeCollaborateurRedir;

    /**
     * Get the code collaborateur redir.
     *
     * @return string Returns the code collaborateur redir.
     */
    public function getCodeCollaborateurRedir() {
        return $this->codeCollaborateurRedir;
    }

    /**
     * Set the code collaborateur redir.
     *
     * @param string $codeCollaborateurRedir The code collaborateur redir.
     */
    public function setCodeCollaborateurRedir($codeCollaborateurRedir) {
        $this->codeCollaborateurRedir = $codeCollaborateurRedir;
        return $this;
    }
}
