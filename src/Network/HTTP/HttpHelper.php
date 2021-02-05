<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\HTTP;

/**
 * HTTP helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\HTTP
 */
class HttpHelper implements HttpInterface {

    /**
     * Get the HTTP methods.
     *
     * @return string[] Returns the HTTP methods.
     */
    public static function getHttpMethods(): array {
        return [
            static::HTTP_METHOD_DELETE,
            static::HTTP_METHOD_GET,
            static::HTTP_METHOD_HEAD,
            static::HTTP_METHOD_OPTIONS,
            static::HTTP_METHOD_PATCH,
            static::HTTP_METHOD_POST,
            static::HTTP_METHOD_PUT,
        ];
    }

    /**
     * Get the HTTP status.
     *
     * @return int[] Returns the HTTP status.
     */
    public static function getHttpStatus(): array {
        return [
            static::HTTP_STATUS_CONTINUE,
            static::HTTP_STATUS_SWITCHING_PROTOCOLS,
            static::HTTP_STATUS_PROCESSING,
            static::HTTP_STATUS_OK,
            static::HTTP_STATUS_CREATED,
            static::HTTP_STATUS_ACCEPTED,
            static::HTTP_STATUS_NON_AUTHORITATIVE_INFORMATION,
            static::HTTP_STATUS_NO_CONTENT,
            static::HTTP_STATUS_RESET_CONTENT,
            static::HTTP_STATUS_PARTIAL_CONTENT,
            static::HTTP_STATUS_MULTI_STATUS,
            static::HTTP_STATUS_ALREADY_REPORTED,
            static::HTTP_STATUS_IM_USED,
            static::HTTP_STATUS_MULTIPLE_CHOICES,
            static::HTTP_STATUS_MOVED_PERMANENTLY,
            static::HTTP_STATUS_MOVED_TEMPORARILY,
            static::HTTP_STATUS_SEE_OTHER,
            static::HTTP_STATUS_NOT_MODIFIED,
            static::HTTP_STATUS_USE_PROXY,
            static::HTTP_STATUS_TEMPORARY_REDIRECT,
            static::HTTP_STATUS_PERMANENT_REDIRECT,
            static::HTTP_STATUS_BAD_REQUEST,
            static::HTTP_STATUS_UNAUTHORIZED,
            static::HTTP_STATUS_PAYMENT_REQUIRED,
            static::HTTP_STATUS_FORBIDDEN,
            static::HTTP_STATUS_NOT_FOUND,
            static::HTTP_STATUS_METHOD_NOT_ALLOWED,
            static::HTTP_STATUS_NOT_ACCEPTABLE,
            static::HTTP_STATUS_PROXY_AUTHENTICATION_REQUIRED,
            static::HTTP_STATUS_REQUEST_TIME_OUT,
            static::HTTP_STATUS_CONFLICT,
            static::HTTP_STATUS_GONE,
            static::HTTP_STATUS_LENGTH_REQUIRED,
            static::HTTP_STATUS_PRECONDITION_FAILED,
            static::HTTP_STATUS_REQUEST_ENTITY_TOO_LARGE,
            static::HTTP_STATUS_REQUEST_URI_TOO_LONG,
            static::HTTP_STATUS_UNSUPPORTED_MEDIA_TYPE,
            static::HTTP_STATUS_REQUESTED_RANGE_UNSATISFIABLE,
            static::HTTP_STATUS_EXPECTATION_FAILED,
            static::HTTP_STATUS_UNPROCESSABLE_ENTITY,
            static::HTTP_STATUS_LOCKED,
            static::HTTP_STATUS_METHOD_FAILURE,
            static::HTTP_STATUS_UPGRADE_REQUIRED,
            static::HTTP_STATUS_PRECONDITION_REQUIRED,
            static::HTTP_STATUS_TOO_MANY_REQUESTS,
            static::HTTP_STATUS_REQUEST_HEADER_FIELDS_TOO_LARGE,
            static::HTTP_STATUS_INTERNAL_SERVER_ERROR,
            static::HTTP_STATUS_NOT_IMPLEMENTED,
            static::HTTP_STATUS_BAD_GATEWAY_OU_PROXY_ERROR,
            static::HTTP_STATUS_SERVICE_UNAVAILABLE,
            static::HTTP_STATUS_GATEWAY_TIME_OUT,
            static::HTTP_STATUS_HTTP_VERSION_NOT_SUPPORTED,
            static::HTTP_STATUS_VARIANT_ALSO_NEGOTIATES,
            static::HTTP_STATUS_INSUFFICIENT_STORAGE,
            static::HTTP_STATUS_LOOP_DETECTED,
            static::HTTP_STATUS_NOT_EXTENDED,
            static::HTTP_STATUS_NETWORK_AUTHENTICATION_REQUIRED,
        ];
    }
}
