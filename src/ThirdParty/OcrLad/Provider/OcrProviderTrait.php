<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\OcrLad\Provider;

/**
 * OCR provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\ThirdParty\OcrLad\Provider
 */
trait OcrProviderTrait {

    /**
     * OCR provider.
     *
     * @var OcrProvider
     */
    private $ocrProvider;

    /**
     * Get the OCR provider.
     *
     * @return OcrProvider Returns the OCR provider.
     */
    public function getOcrProvider() {
        return $this->ocrProvider;
    }

    /**
     * Set the OCR provider.
     *
     * @param OcrProvider|null $ocrProvider The OCR provider.
     */
    protected function setOcrProvider(OcrProvider $ocrProvider = null) {
        $this->ocrProvider = $ocrProvider;
        return $this;
    }
}