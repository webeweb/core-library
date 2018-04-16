<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility\IO;

use WBW\Library\Core\IO\HTTPInterface;

/**
 * HTTP utility.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility\IO
 * @final
 */
final class HTTPUtility implements HTTPInterface {

    /**
     * Get the HTTP methods.
     *
     * @return array Returns the HTTP methods.
     */
    public static function getHTTPMethods() {
        return[
            self::HTTP_METHOD_DELETE,
            self::HTTP_METHOD_GET,
            self::HTTP_METHOD_HEAD,
            self::HTTP_METHOD_OPTIONS,
            self::HTTP_METHOD_PATCH,
            self::HTTP_METHOD_POST,
            self::HTTP_METHOD_PUT,
        ];
    }

    /**
     * Get the HTTP status.
     *
     * @return array Returns the HTTP status.
     */
    public static function getHTTPStatus() {
        return [
            self::HTTP_STATUS_CONTINUE,
            self::HTTP_STATUS_SWITCHING_PROTOCOLS,
            self::HTTP_STATUS_PROCESSING,
            self::HTTP_STATUS_OK,
            self::HTTP_STATUS_CREATED,
            self::HTTP_STATUS_ACCEPTED,
            self::HTTP_STATUS_NON_AUTHORITATIVE_INFORMATION,
            self::HTTP_STATUS_NO_CONTENT,
            self::HTTP_STATUS_RESET_CONTENT,
            self::HTTP_STATUS_PARTIAL_CONTENT,
            self::HTTP_STATUS_MULTI_STATUS,
            self::HTTP_STATUS_ALREADY_REPORTED,
            self::HTTP_STATUS_IM_USED,
            self::HTTP_STATUS_MULTIPLE_CHOICES,
            self::HTTP_STATUS_MOVED_PERMANENTLY,
            self::HTTP_STATUS_MOVED_TEMPORARILY,
            self::HTTP_STATUS_SEE_OTHER,
            self::HTTP_STATUS_NOT_MODIFIED,
            self::HTTP_STATUS_USE_PROXY,
            self::HTTP_STATUS_TEMPORARY_REDIRECT,
            self::HTTP_STATUS_PERMANENT_REDIRECT,
            self::HTTP_STATUS_BAD_REQUEST,
            self::HTTP_STATUS_UNAUTHORIZED,
            self::HTTP_STATUS_PAYMENT_REQUIRED,
            self::HTTP_STATUS_FORBIDDEN,
            self::HTTP_STATUS_NOT_FOUND,
            self::HTTP_STATUS_METHOD_NOT_ALLOWED,
            self::HTTP_STATUS_NOT_ACCEPTABLE,
            self::HTTP_STATUS_PROXY_AUTHENTICATION_REQUIRED,
            self::HTTP_STATUS_REQUEST_TIME_OUT,
            self::HTTP_STATUS_CONFLICT,
            self::HTTP_STATUS_GONE,
            self::HTTP_STATUS_LENGTH_REQUIRED,
            self::HTTP_STATUS_PRECONDITION_FAILED,
            self::HTTP_STATUS_REQUEST_ENTITY_TOO_LARGE,
            self::HTTP_STATUS_REQUEST_URI_TOO_LONG,
            self::HTTP_STATUS_UNSUPPORTED_MEDIA_TYPE,
            self::HTTP_STATUS_REQUESTED_RANGE_UNSATISFIABLE,
            self::HTTP_STATUS_EXPECTATION_FAILED,
            self::HTTP_STATUS_UNPROCESSABLE_ENTITY,
            self::HTTP_STATUS_LOCKED,
            self::HTTP_STATUS_METHOD_FAILURE,
            self::HTTP_STATUS_UPGRADE_REQUIRED,
            self::HTTP_STATUS_PRECONDITION_REQUIRED,
            self::HTTP_STATUS_TOO_MANY_REQUESTS,
            self::HTTP_STATUS_REQUEST_HEADER_FIELDS_TOO_LARGE,
            self::HTTP_STATUS_INTERNAL_SERVER_ERROR,
            self::HTTP_STATUS_NOT_IMPLEMENTED,
            self::HTTP_STATUS_BAD_GATEWAY_OU_PROXY_ERROR,
            self::HTTP_STATUS_SERVICE_UNAVAILABLE,
            self::HTTP_STATUS_GATEWAY_TIME_OUT,
            self::HTTP_STATUS_HTTP_VERSION_NOT_SUPPORTED,
            self::HTTP_STATUS_VARIANT_ALSO_NEGOTIATES,
            self::HTTP_STATUS_INSUFFICIENT_STORAGE,
            self::HTTP_STATUS_LOOP_DETECTED,
            self::HTTP_STATUS_NOT_EXTENDED,
            self::HTTP_STATUS_NETWORK_AUTHENTICATION_REQUIRED,
        ];
    }

}
