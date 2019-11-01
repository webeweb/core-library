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
 * Droit collab visu documents trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitCollabVisuDocumentsTrait {

    /**
     * Droit collab visu documents.
     *
     * @var string
     */
    private $droitCollabVisuDocuments;

    /**
     * Get the droit collab visu documents.
     *
     * @return string Returns the droit collab visu documents.
     */
    public function getDroitCollabVisuDocuments() {
        return $this->droitCollabVisuDocuments;
    }

    /**
     * Set the droit collab visu documents.
     *
     * @param string $droitCollabVisuDocuments The droit collab visu documents.
     */
    public function setDroitCollabVisuDocuments($droitCollabVisuDocuments) {
        $this->droitCollabVisuDocuments = $droitCollabVisuDocuments;
        return $this;
    }
}
