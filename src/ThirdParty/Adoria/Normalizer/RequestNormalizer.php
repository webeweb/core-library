<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Adoria\Normalizer;

use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\ThirdParty\Adoria\Model\RequestData;

/**
 * Request normalizer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\ThirdParty\Adoria\Normalizer
 */
class RequestNormalizer {

    /**
     * Normalize date format.
     *
     * @var string
     */
    const NORMALIZE_DATE_FORMAT = "Y-m-d";

    /**
     * Normalize a request data.
     *
     * @param RequestData $requestData The request data.
     * @return array Returns the normalized parameters.
     */
    public static function normalizeRequestData(RequestData $requestData) {

        $parameters = [];

        ArrayHelper::set($parameters, "AnalyticCode", $requestData->getAnalyticCode(), [null]);
        if (null !== $requestData->getBuyDateMax()) {
            $parameters["BuyDateMax"] = $requestData->getBuyDateMax()->format(self::NORMALIZE_DATE_FORMAT);
        }
        ArrayHelper::set($parameters, "IdentificationKey", $requestData->getIdentificationKey(), [null]);

        return $parameters;
    }
}
